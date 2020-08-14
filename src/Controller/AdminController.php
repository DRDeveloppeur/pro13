<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Contact;
use App\Entity\Produit;
use App\Form\ArticleType;
use App\Form\CategorieType;
use App\Form\ContactType;
use App\Form\ProduitType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\ContactRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [

        ]);
    }
    
    /**
     * @Route("/categories", name="admin_categories")
     */
    public function categorie(CategorieRepository $repo, Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        return $this->render('admin/categories.html.twig', [
            'categories' => $repo->findAll(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/categorie/new", name="categorie_new", methods={"GET","POST"})
     */
    public function categoryNew(Request $request): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorie);
            $entityManager->flush();
            $this->addFlash("success", "La categorie '".$categorie->getTitle()."' as bien étai ajouter !");

            return $this->redirectToRoute('admin_categories');
        }

        return $this->render('admin/categories.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/categorie/{id}/edit", name="categorie_edit", methods={"GET","POST"})
     */
    public function categoryEdit(Request $request, Categorie $categorie): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("info", "La categorie '".$categorie->getTitle()."' as étai mis à jour !");

            return $this->redirectToRoute('admin_categories');
        }

        return $this->render('admin/categories_edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/categorie/{id}", name="categorie_delete", methods={"DELETE"})
     */
    public function categoryDelete(Request $request, Categorie $categorie): Response
    {
        if ($categorie->getProduits()[0] !== NULL) {
            $this->addFlash("error", "Cette categorie est présente dans un/plusieurs produit/s, vous ne pouvez donc pas la supprimer !");
            return $this->redirectToRoute('admin_categories');
        }

        if ($this->isCsrfTokenValid('delete'.$categorie->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categorie);
            $entityManager->flush();
            $this->addFlash("success", "La categorie '".$categorie->getTitle()."' as bien étai supprimer !");
        }

        return $this->redirectToRoute('admin_categories');
    }



    // ________________________________________________________________________________________________



    /**
     * @Route("/produits", name="admin_produits")
     */
    public function produit(ProduitRepository $repo, Request $request)
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        return $this->render('admin/produits.html.twig', [
            'produits' => $repo->findAll(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/produit/new", name="produit_new", methods={"GET","POST"})
     */
    public function produitNew(Request $request): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produit);
            $entityManager->flush();
            $this->addFlash("success", "Le produit '".$produit->getTitle()."' as bien étai ajouter !");

            return $this->redirectToRoute('admin_produits');
        }

        return $this->render('admin/produits.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/produit/{id}/edit", name="produit_edit", methods={"GET","POST"})
     */
    public function produitEdit(Request $request, Produit $produit): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("info", "Le produit '".$produit->getTitle()."' as étai mis à jour !");

            return $this->redirectToRoute('admin_produits');
        }

        return $this->render('admin/produit_edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/produit/{id}", name="produit_delete", methods={"DELETE"})
     */
    public function produitDelete(Request $request, Produit $produit): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($produit);
            $entityManager->flush();
            $this->addFlash("success", "Le produit '".$produit->getTitle()."' as bien étai supprimer !");
        }

        return $this->redirectToRoute('admin_produits');
    }



    // ________________________________________________________________________________________________



    /**
     * @Route("/articles", name="admin_articles")
     */
    public function articles(ArticleRepository $repo, Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        return $this->render('admin/articles.html.twig', [
            'articles' => $repo->findAll(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/article/new", name="article_new", methods={"GET","POST"})
     */
    public function articleNew(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            $this->addFlash("success", "L'article '".$article->getTitle()."' as bien étai ajouter !");

            return $this->redirectToRoute('admin_articles');
        }

        return $this->render('admin/articles.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/article/{id}/edit", name="article_edit", methods={"GET","POST"})
     */
    public function articleEdit(Request $request, Article $article): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("info", "L'article '".$article->getTitle()."' as étai mis à jour !");

            return $this->redirectToRoute('admin_articles');
        }

        return $this->render('admin/article_edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/article/{id}", name="article_delete", methods={"DELETE"})
     */
    public function articleDelete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();
            $this->addFlash("success", "L'article '".$article->getTitle()."' as bien étai supprimer !");
        }

        return $this->redirectToRoute('admin_articles');
    }



    // ________________________________________________________________________________________________



    /**
     * @Route("/contacts", name="admin_contacts")
     */
    public function contacts(ContactRepository $repo, Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        return $this->render('admin/contacts.html.twig', [
            'contacts' => $repo->findAll(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/contact/new", name="contact_new", methods={"GET","POST"})
     */
    public function contactNew(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash("success", "Le contact '".$contact->getTitle()."' as bien étai ajouter !");

            return $this->redirectToRoute('admin_contacts');
        }

        return $this->render('admin/contacts.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/contact/{id}/edit", name="contact_edit", methods={"GET","POST"})
     */
    public function contactEdit(Request $request, Contact $contact): Response
    {
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("info", "Le contact '".$contact->getTitle()."' as étai mis à jour !");

            return $this->redirectToRoute('admin_contacts');
        }

        return $this->render('admin/contact_edit.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/contact/{id}", name="contact_delete", methods={"DELETE"})
     */
    public function contactDelete(Request $request, Contact $contact): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contact->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contact);
            $entityManager->flush();
            $this->addFlash("success", "Le contact '".$contact->getTitle()."' as bien étai supprimer !");
        }

        return $this->redirectToRoute('admin_contacts');
    }
}
