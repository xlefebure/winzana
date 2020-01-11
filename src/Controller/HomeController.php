<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * HomeController constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Page d'accueil
     * @Route("/", name="home.index")
     * @param Request $request
     * @param ArticleRepository $articleRepository
     * @return Response
     */
    public function index(Request $request, ArticleRepository $articleRepository)
    {
        $article = new Article();

        // Création du formulaire
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        // Si formulaire soumis & valide
        if ($form->isSubmitted() && $form->isValid())
        {
            try {
                $this->entityManager->persist($article);
                $this->entityManager->flush();
                $this->addFlash('success', 'L\'article a bien été ajouté');
            }
            catch (\Exception $e)
            {
                $this->addFlash('error', 'Erreur lors de l\'ajout de l\'article');
            }
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
            'articles' => $articleRepository->findLastArticles(3)
        ]);
    }

    /**
     * Affiche l'article
     * @Route("show/{id}", name="home.show")
     * @param Article $article
     * @return Response
     */
    public function show(Article $article)
    {
        return $this->render('home/show.html.twig', [
            'article' => $article
        ]);
    }
}
