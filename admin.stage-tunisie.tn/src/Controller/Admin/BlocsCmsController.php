<?php

namespace App\Controller\Admin;

use App\Entity\BlocsCms;
use App\Form\BlocsCmsType;
use App\Repository\BlocsCmsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class BlocsCmsController extends AbstractController
{
    /**
     * @Route("/admin/blocs/cms", name="blocs_cms_index", methods={"GET"})
     */
    public function index(BlocsCmsRepository $blocsCmsRepository): Response
    {
        return $this->render('admin/blocs_cms/index.html.twig', [
            'Allblocs_cms' => $blocsCmsRepository->findAll(),  
            'ItemsBloc_cms' => $blocsCmsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/blocs/cms/new", name="blocs_cms_new", methods={"GET", "POST"})
     */
    public function new(Request $request, BlocsCmsRepository $blocsCmRepository, EntityManagerInterface $entityManager): Response
    {
        $blocsCm = new BlocsCms();
        $form = $this->createForm(BlocsCmsType::class, $blocsCm);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $request->files->get('blocs_cms');
/*             $hook = $form->getData()->getHook();
            $existe_hook =  $blocsCmRepository->findMembreByHook($hook);

            if($existe_hook)
            {
               $this->addFlash('error', 'Un bloc Cms est déjà enregistré avec cet hook');
                return $this->renderForm('admin/blocs_cms/index.html.twig', [
                 'form' => $form,
               ]);
 
            }
 */

            if($imageFile['image'] !== null)
            {
                $originalFilename = $imageFile['image']->getClientOriginalName();
                $extensionImage = $imageFile['image']->guessExtension();
                $valideExtension = array('jpg', 'png', 'webp');
                if (in_array($extensionImage, $valideExtension))
                {
                    try {
                        $imageFile['image']->move(
                            $this->getParameter('kernel.project_dir').'/public/uploads/blocCms/',
                            $originalFilename 
                        );
                        
                        $blocsCm->setImage($originalFilename);
                       /* if($form->getData()->getStatus())
                        {
                            $blocsCm->setStatus('1');
                        }
                        else{
                            $blocsCm->setStatus('0');
                        }*/
                        // on récupére la dernière position
                        // $lastPosition = $blocsCmRepository->getLastPosition();
                        // if($lastPosition){
                        //     $postion = $lastPosition[0]['position'] + 1;
                        // }
                        // else{
                        //     $postion = 1;
                        // }
                        //$blocsCm->setPosition($postion);
                        $entityManager->persist($blocsCm);
                        $entityManager->flush();
                        
                        $newlFilename = "blocs_cms_".$blocsCm->getId().'.'.$extensionImage;
                        rename($this->getParameter('kernel.project_dir').'/public/uploads/blocCms/'.$originalFilename, $this->getParameter('kernel.project_dir').'/public/uploads/blocCms/'.$newlFilename);
                        $blocsCm->setImage($newlFilename);
                        $entityManager->flush();
                        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                        return $this->redirectToRoute('blocs_cms_index', [], Response::HTTP_SEE_OTHER);
                       
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                        $this->addFlash('error', 'Une erreur est survenue lors de lenregistrement de l\'image, veuillez réssayer.');
                    return $this->renderForm('admin/blocs_cms/new.html.twig', [
                        'form' => $form,
                    ]);
                    }
                }
                else{
                    $this->addFlash('error', 'Extension image non valide.');
                    return $this->renderForm('admin/blocs_cms/new.html.twig', [
                        'form' => $form,
                      ]);
                }
                
            }
            else{
                $this->addFlash('error', 'Veuillez entrer une image.');
                return $this->renderForm('admin/blocs_cms/new.html.twig', [
                    'form' => $form,
                  ]);
            }
            $entityManager->persist($blocsCm);
            $entityManager->flush();

            return $this->redirectToRoute('blocs_cms_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/blocs_cms/new.html.twig', [
            'blocs_cms' => $blocsCm,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/admin/blocs/cms/{id}", name="blocs_cms_show", methods={"GET"})
     */
    public function show(BlocsCms $blocsCm): Response
    {
        return $this->render('admin/blocs_cms/show.html.twig', [
            'blocs_cm' => $blocsCm,
        ]);
    }

    /**
     * @Route("/admin/blocs/cms/{id}/edit", name="blocs_cms_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, BlocsCms $blocsCm, EntityManagerInterface $entityManager): Response
    {
   
        $oldImage = $blocsCm->getImage();
        $form = $this->createForm(BlocsCmsType::class, $blocsCm);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $request->files->get('blocs_cms');
            if($imageFile['image'] !== null)
            {
                $originalFilename = $imageFile['image']->getClientOriginalName();
                $extensionImage = $imageFile['image']->guessExtension();
                $valideExtension = array('jpg', 'png', 'webp');
                if (in_array($extensionImage, $valideExtension))
                {
                    try {
                        $imageFile['image']->move(
                            $this->getParameter('kernel.project_dir').'/public/uploads/blocCms/',
                            $originalFilename 
                        );
                        
                        $blocsCm->setImage($originalFilename);
                     
                        $entityManager->flush();
                        $newlFilename = "blocs_cms_".$blocsCm->getId().'.'.$extensionImage;
                        rename($this->getParameter('kernel.project_dir').'/public/uploads/blocCms/'.$originalFilename, $this->getParameter('kernel.project_dir').'/public/uploads/blocCms/'.$newlFilename);
                        $blocsCm->setImage($newlFilename);
                        $entityManager->flush();
                        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                        return $this->redirectToRoute('blocs_cms_index', [], Response::HTTP_SEE_OTHER);
                           
                        } catch (FileException $e) {
                            // ... handle exception if something happens during file upload
                            $this->addFlash('error', 'Une erreur est survenue lors de lenregistrement de l\'image, veuillez réssayer.');
                        return $this->renderForm('admin/blocs_cms/edit.html.twig', [
                            'form' => $form,
                        ]);
                        }
                }
                else{
                    $this->addFlash('error', 'Extension image non valide.');
                    return $this->renderForm('admin/blocs_cms/new.html.twig', [
                        'form' => $form,
                      ]);
                }
                
            }
            else if($oldImage == "" ){

                $this->addFlash('error', 'Veuillez entrer une image.');
        return $this->renderForm('admin/blocs_cms/edit.html.twig', [
            'blocs_cms' => $blocsCm,
            'form' => $form,
        ]);
    }
    else{
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
        return $this->redirectToRoute('blocs_cms_index', [], Response::HTTP_SEE_OTHER);
    }
}
if($oldImage !=='')
{
    $pathImage =  $this->getParameter('kernel.project_dir').'/public/uploads/blocCms/'.$oldImage;
    $url_image =  'uploads/blocCms/'.$oldImage;
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

return $this->renderForm('admin/blocs_cms/edit.html.twig', [
    'blocs_cms' => $blocsCm,
    'form' => $form,
    'oldImage' => $imageSlider
]);
}

    /**
     * @Route("/admin/delete/blocs/cms/{id}", name="blocs_cms_delete", methods={"POST","GET"})
     */
    public function delete(Request $request, BlocsCms $blocsCm, EntityManagerInterface $entityManager): Response
    {
        // if ($this->isCsrfTokenValid('delete'.$blocsCm->getId(), $request->request->get('_token'))) {
        //     $entityManager->remove($blocsCm);
        //     $entityManager->flush();
        // }

     
            $entityManager->remove($blocsCm);
            $entityManager->flush();
       

        return $this->redirectToRoute('blocs_cms_index', [], Response::HTTP_SEE_OTHER);
    }


}
