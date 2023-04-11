<?php

namespace App\Controller\Admin;

use App\Entity\GestionActualites;
use App\Form\GestionActualitesType;
use App\Repository\GestionActualitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/gestion/actualites')]
class GestionActualitesController extends AbstractController
{
     /**
     * @Route("/admin/gestion_actualites", name="gestionactualite", methods={"GET"})
     */
    public function index(GestionActualitesRepository $gestionActualitesRepository): Response
    {
        return $this->render('admin/gestion_actualites/index.html.twig', [
            'gestionactualites' => $gestionActualitesRepository->findAll(),
        ]);
    } 

        /**
     * @Route("/admin/gestion_actualites/new", name="gestionactualite_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $gestionactualite = new GestionActualites();
        $form = $this->createForm(GestionActualitesType::class, $gestionactualite);
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
                                        $this->getParameter('kernel.project_dir').'/public/uploads/gestionActualite/',
                                        $originalFilename 
                                    );
                                    $gestionactualite->setImage($originalFilename);
                                    $entityManager->persist($gestionactualite);
                                    $entityManager->flush();
                                    $newlFilename = "gestion_actualites".$gestionactualite->getId().'.'.$extensionImage;
                                    rename($this->getParameter('kernel.project_dir').'/public/uploads/gestionActualite/'.$originalFilename, $this->getParameter('kernel.project_dir').'/public/uploads/gestionActualite/'.$newlFilename);
                                    $gestionactualite->setImage($newlFilename);
                                    $entityManager->flush();
                                    $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                                    return $this->redirectToRoute('gestionactualite', [], Response::HTTP_SEE_OTHER);
                                   
                                } catch (FileException $e) {
                                    // ... handle exception if something happens during file upload
                                    $this->addFlash('error', 'Une erreur est survenue lors de lenregistrement de l\'image, veuillez réssayer.');
                                return $this->renderForm('admin/gestion_actualites/new.html.twig', [
                                    'form' => $form,
                                ]);
                                }
                            }
                            else{
                                $this->addFlash('error', 'Extension image non valide.');
                                return $this->renderForm('admin/gestion_actualites/new.html.twig', [
                                    'form' => $form,
                                  ]);
                            }
                            
                        }
                        else{
                            $this->addFlash('error', 'Veuillez entrer une image.');
                            return $this->renderForm('admin/gestion_actualites/new.html.twig', [
                                'form' => $form,
                              ]);
                        }
                        $entityManager->persist($gestionactualite);
                        $entityManager->flush();
            
                        return $this->redirectToRoute('gestionactualite', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/gestion_actualites/new.html.twig', [
            'gestionactualite' => $gestionactualite,
            'form' => $form,
        ]);
    } 
    
            /**
     * @Route("/admin/gestion_actualites/{id}/edit", name="gestionactualite_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, GestionActualites $gestionActualite, EntityManagerInterface $entityManager, SluggerInterface $slugger ): Response
    {
        $oldImage = $gestionActualite->getImage();
        $form = $this->createForm(GestionActualitesType::class, $gestionActualite);
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
                            $this->getParameter('kernel.project_dir').'/public/uploads/gestionActualite/',
                            $originalFilename 
                        );
                        
                        $gestionActualite->setImage($originalFilename);
                     
                        $entityManager->flush();
                        $newlFilename = "gestion_actualites".$gestionActualite->getId().'.'.$extensionImage;
                        rename($this->getParameter('kernel.project_dir').'/public/uploads/gestionActualite/'.$originalFilename, $this->getParameter('kernel.project_dir').'/public/uploads/gestionActualite/'.$newlFilename);
                        $gestionActualite->setImage($newlFilename);
                        $entityManager->flush();
                        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                        return $this->redirectToRoute('gestionactualite', [], Response::HTTP_SEE_OTHER);
                           
                        } catch (FileException $e) {
                            // ... handle exception if something happens during file upload
                            $this->addFlash('error', 'Une erreur est survenue lors de lenregistrement de l\'image, veuillez réssayer.');
                        return $this->renderForm('admin/gestion_actualites/edit.html.twig', [
                            'form' => $form,
                        ]);
                        }
                }
                else{
                    $this->addFlash('error', 'Extension image non valide.');
                    return $this->renderForm('admin/gestion_actualites/new.html.twig', [
                        'form' => $form,
                      ]);
                }
                
            }
            else if($oldImage == "" ){

                $this->addFlash('error', 'Veuillez entrer une image.');
        return $this->renderForm('admin/gestion_actualites/edit.html.twig', [
            'gestion_actualites' => $gestionActualite,
            'form' => $form,
        ]);
    }
    else{
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
        return $this->redirectToRoute('gestionactualite', [], Response::HTTP_SEE_OTHER);
    }
}
if($oldImage !=='')
{
    $pathImage =  $this->getParameter('kernel.project_dir').'/public/uploads/gestionActualite/'.$oldImage;
    $url_image =  'uploads/gestionActualite/'.$oldImage;
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

return $this->renderForm('admin/gestion_actualites/edit.html.twig', [
    'gestion_actualites' => $gestionActualite,
    'form' => $form,
    'oldImage' => $imageSlider
]);
    }

    /**
     * @Route("/admin/delete/{id}", name="gestionactualite_delete", methods={"GET"})
     */
    public function delete(Request $request, GestionActualites $gestionActualite, EntityManagerInterface $entityManager): Response
    {

        $entityManager->remove($gestionActualite);
        $entityManager->flush();

        return $this->redirectToRoute('gestionactualite', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/admin/gestion_actualites/{id}/changestatus", name="gestionactualite_changestatus", methods={"GET", "POST"})
     */
    public function changestatus(Request $request, GestionActualites $gestionActualite, EntityManagerInterface $entityManager): Response
    {
        $active = $request->query->get('active');
        $gestionActualite->setActive($active);
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
        return $this->redirectToRoute('gestionactualite', [], Response::HTTP_SEE_OTHER);
    }

        /**
     * @Route("/admin/gestion_actualites/reorder", name="gestionactualite_reorder", methods={"GET", "POST"})
     */
    public function reorder(Request $request, EntityManagerInterface $entityManager, GestionActualitesRepository $gestionActualitesRepository): Response
    {
        $tableOrder = (array)$request->request->get('order');
        foreach ($tableOrder as $k => $order) {
            $actualite = $gestionActualitesRepository->find($order);
            $position = $k + 1;
            $actualite->setPosition($position);
            $entityManager->flush();
        }
        return $this->json([
            'success' => true,
            'data' => 'Position mis à jour.'
        ]);
    }

    /**
     * @Route("/admin/gestion_actualites/deleteSelected", name="gestionactualite_deleteSelected",  methods={"GET", "POST"})
     */
    public function deleteSelected(Request $request, EntityManagerInterface $entityManager, GestionActualitesRepository $gestionActualitesRepository): Response
    {
        $elementsSelected = $request->query->get('listSelected');
        $tabElements = explode(",", $elementsSelected);
        foreach ($tabElements as $element) {
            $gestionactualite = $gestionActualitesRepository->find($element);
            $entityManager->remove($gestionactualite);
        }
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés');
        return $this->redirectToRoute('gestionactualite', [], Response::HTTP_SEE_OTHER);
    }

}
