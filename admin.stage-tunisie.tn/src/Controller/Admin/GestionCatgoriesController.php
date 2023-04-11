<?php

namespace App\Controller\Admin;

use App\Entity\GestionCatgories;
use App\Form\GestionCatgoriesType;
use App\Repository\GestionCatgoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/gestion/catgories')]
class GestionCatgoriesController extends AbstractController
{

    /**
     * @Route("/admin/gestion_catgories", name="gestioncatgorie", methods={"GET"})
     */
    public function index(GestionCatgoriesRepository $gestionCatgoriesRepository): Response
    {
        return $this->render('admin/gestion_catgories/index.html.twig', [
            'gestion_catgories' => $gestionCatgoriesRepository->findAll(),
        ]);
    }



    /**
     * @Route("/admin/gestion_catgories/new", name="gestioncatgorie_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $gestioncatgorie = new GestionCatgories();
        $form = $this->createForm(GestionCatgoriesType::class, $gestioncatgorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

    
            $imageFile = $form->get('image')->getData();


            
                        if($imageFile )
                        {
                            $originalFilename = $imageFile->getClientOriginalName();
                            $extensionImage = $imageFile->guessExtension();
                            $valideExtension = array('jpg', 'png', 'webp');
                            if (in_array($extensionImage, $valideExtension))
                            {
                                try {
                                    $imageFile->move(
                                        $this->getParameter('kernel.project_dir').'/public/uploads/gestionCategory/',
                                        $originalFilename 
                                    );
                                    
                                    $gestioncatgorie->setImage($originalFilename);
                                    $entityManager->persist($gestioncatgorie);
                                    $entityManager->flush();
                                    
                                    $newlFilename = "gestion_categorie".$gestioncatgorie->getId().'.'.$extensionImage;
                                    rename($this->getParameter('kernel.project_dir').'/public/uploads/gestionCategory/'.$originalFilename, $this->getParameter('kernel.project_dir').'/public/uploads/gestionCategory/'.$newlFilename);
                                    $gestioncatgorie->setImage($newlFilename);
                                    $entityManager->flush();
                                    $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                                    return $this->redirectToRoute('gestioncatgorie', [], Response::HTTP_SEE_OTHER);
                                   
                                } catch (FileException $e) {
                                    // ... handle exception if something happens during file upload
                                    $this->addFlash('error', 'Une erreur est survenue lors de lenregistrement de l\'image, veuillez réssayer.');
                                return $this->renderForm('admin/gestion_catgories/new.html.twig', [
                                    'form' => $form,
                                ]);
                                }
                            }
                            else{
                                $this->addFlash('error', 'Extension image non valide.');
                                return $this->renderForm('admin/gestion_catgories/new.html.twig', [
                                    'form' => $form,
                                  ]);
                            }
                            
                        }
                        else{
                            $this->addFlash('error', 'Veuillez entrer une image.');
                            return $this->renderForm('admin/gestion_catgories/new.html.twig', [
                                'form' => $form,
                              ]);
                        }
                        $entityManager->persist($gestioncatgorie);
                        $entityManager->flush();
            
                        return $this->redirectToRoute('gestioncatgorie', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/gestion_catgories/new.html.twig', [
            'gestioncatgorie' => $gestioncatgorie,
            'form' => $form,
        ]);
    }

        /**
     * @Route("/admin/gestion_catgories/{id}/edit", name="gestioncatgorie_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, GestionCatgories $gestioncatgorie, EntityManagerInterface $entityManager, SluggerInterface $slugger ): Response
    {
        $oldImage = $gestioncatgorie->getImage();
        $form = $this->createForm(GestionCatgoriesType::class, $gestioncatgorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
            $imageFile = $form->get('image')->getData();
            if( $imageFile )
            {
                $originalFilename =  $imageFile ->getClientOriginalName();
                $extensionImage = $imageFile ->guessExtension();
                $valideExtension = array('jpg', 'png', 'webp');
                if (in_array($extensionImage, $valideExtension))
                {
                    try {
                        $imageFile ->move(
                            $this->getParameter('kernel.project_dir').'/public/uploads/gestionCategory/',
                            $originalFilename 
                        );
                        
                        $gestioncatgorie->setImage($originalFilename);
                     
                        $entityManager->flush();
                        $newlFilename = "gestion_categorie".$gestioncatgorie->getId().'.'.$extensionImage;
                        rename($this->getParameter('kernel.project_dir').'/public/uploads/gestionCategory/'.$originalFilename, $this->getParameter('kernel.project_dir').'/public/uploads/gestionCategory/'.$newlFilename);
                        $gestioncatgorie->setImage($newlFilename);
                        $entityManager->flush();
                        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                        return $this->redirectToRoute('gestioncatgorie', [], Response::HTTP_SEE_OTHER);
                           
                        } catch (FileException $e) {
                            // ... handle exception if something happens during file upload
                            $this->addFlash('error', 'Une erreur est survenue lors de lenregistrement de l\'image, veuillez réssayer.');
                        return $this->renderForm('admin/gestion_catgories/edit.html.twig', [
                            'form' => $form,
                        ]);
                        }
                }
                else{
                    $this->addFlash('error', 'Extension image non valide.');
                    return $this->renderForm('admin/gestion_catgories/new.html.twig', [
                        'form' => $form,
                      ]);
                }
                
            }
            else if($oldImage == "" ){

                $this->addFlash('error', 'Veuillez entrer une image.');
        return $this->renderForm('admin/gestion_catgories/edit.html.twig', [
            'gestion_categorie' => $gestioncatgorie,
            'form' => $form,
        ]);
    }
    else{
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
        return $this->redirectToRoute('gestioncatgorie', [], Response::HTTP_SEE_OTHER);
    }
}
if($oldImage !=='')
{
    $pathImage =  $this->getParameter('kernel.project_dir').'/public/uploads/gestionCategory/'.$oldImage;
    $url_image =  'uploads/gestionCategory/'.$oldImage;
    $file_exists = file_exists($pathImage);
    $imageSlider = array(
        'file_exists' => $file_exists,
        'filename' => $pathImage,
        'url_image' => $url_image
    );
}
else{
    $imageSlider = ''; 
}

return $this->renderForm('admin/gestion_catgories/edit.html.twig', [
    'gestion_categorie' => $gestioncatgorie,
    'form' => $form,
    'oldImage' => $imageSlider
]);
    }

        /**
     * @Route("/admin/delete/{id}", name="gestioncatgorie_delete", methods={"GET"})
     */
    public function delete(Request $request, GestionCatgories $gestionCatgory, EntityManagerInterface $entityManager): Response
    {

        $entityManager->remove($gestionCatgory);
        $entityManager->flush();


        return $this->redirectToRoute('gestioncatgorie', [], Response::HTTP_SEE_OTHER);
    }

       /**
     * @Route("/admin/gestion_catgories/{id}/changestatus", name="gestioncatgorie_changestatus", methods={"GET", "POST"})
     */
    public function changestatus(Request $request, GestionCatgories $gestionCatgory, EntityManagerInterface $entityManager): Response
    {
        $etat = $request->query->get('etat');
        $gestionCatgory->setEtat($etat);
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
        return $this->redirectToRoute('gestioncatgorie', [], Response::HTTP_SEE_OTHER);
    }

        /**
     * @Route("/admin/gestion_catgories/reorder", name="gestioncatgorie_reorder", methods={"GET", "POST"})
     */
    public function reorder(Request $request, EntityManagerInterface $entityManager, GestionCatgoriesRepository $gestionCatgoriesRepository): Response
    {
        $tableOrder = (array)$request->request->get('order');
        foreach ($tableOrder as $k => $order) {
            $category = $gestionCatgoriesRepository->find($order);
            $position = $k + 1;
            $category->setPosition($position);
            $entityManager->flush();
        }
        return $this->json([
            'success' => true,
            'data' => 'Position mis à jour.'
        ]);
    }

    /**
     * @Route("/admin/gestion_catgories/deleteSelected", name="gestioncatgorie_deleteSelected",  methods={"GET", "POST"})
     */
    public function deleteSelected(Request $request, EntityManagerInterface $entityManager, GestionCatgoriesRepository $gestionCatgoriesRepository): Response
    {
        $elementsSelected = $request->query->get('listSelected');
        $tabElements = explode(",", $elementsSelected);
        foreach ($tabElements as $element) {
            $gestioncatgorie = $gestionCatgoriesRepository->find($element);
            $entityManager->remove($gestioncatgorie);
        }
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés');
        return $this->redirectToRoute('gestioncatgorie', [], Response::HTTP_SEE_OTHER);
    }

}
