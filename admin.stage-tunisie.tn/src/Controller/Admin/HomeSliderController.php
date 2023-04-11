<?php

namespace App\Controller\Admin;

use App\Entity\HomeSlider;
use App\Form\HomeSliderType;
use App\Entity\Configuration;
use App\Form\ConfigurationType;
use App\Repository\HomeSliderRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ConfigurationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


class HomeSliderController extends AbstractController
{
    /**
     * @Route("/admin/homeslider", name="homeslider", methods={"GET"})
     */
    public function index(Request $request,HomeSliderRepository $homeSliderRepository,ConfigurationRepository $configurationRepository): Response
    {

        $configCarrousel = $configurationRepository->findSeetings('homeslider');
        //$condition = array('status' => 1);
        return $this->render('admin/homeslider/index.html.twig', [
            //'listSlides' => $homeSliderRepository->findBy($condition),
            'listSlides' => $homeSliderRepository->findAll(),
            'configCarrousel' => $configCarrousel,
        ]);
    }

    /**
     * @Route("/admin/homeslider/new", name="homeslider_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, HomeSliderRepository $homeSliderRepository): Response
    {
        $homeSlider = new HomeSlider();
        $form = $this->createForm(HomeSliderType::class, $homeSlider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $imageFile = $request->files->get('home_slider');
            if($imageFile['image'] !== null)
            {
                $originalFilename = $imageFile['image']->getClientOriginalName();
                $extensionImage = $imageFile['image']->guessExtension();
                $valideExtension = array('jpg', 'png', 'webp');
                if (in_array($extensionImage, $valideExtension))
                {
                    try {
                        $imageFile['image']->move(
                            $this->getParameter('kernel.project_dir').'/public/uploads/carrousel/',
                            $originalFilename 
                        );
                        
                        $homeSlider->setImage($originalFilename);
                        if($form->getData()->getStatus())
                        {
                            $homeSlider->setStatus('1');
                        }
                        else{
                            $homeSlider->setStatus('0');
                        }
                        // on récupére la dernière position
                        $lastPosition = $homeSliderRepository->getLastPosition();
                        if($lastPosition){
                            $postion = $lastPosition[0]['position'] + 1;
                        }
                        else{
                            $postion = 1;
                        }
                        $homeSlider->setPosition($postion);
                        $entityManager->persist($homeSlider);
                        $entityManager->flush();
                        
                        $newlFilename = "homeslider_".$homeSlider->getId().'.'.$extensionImage;
                        rename($this->getParameter('kernel.project_dir').'/public/uploads/carrousel/'.$originalFilename, $this->getParameter('kernel.project_dir').'/public/uploads/carrousel/'.$newlFilename);
                        $homeSlider->setImage($newlFilename);
                        $entityManager->flush();
                        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                        return $this->redirectToRoute('homeslider', [], Response::HTTP_SEE_OTHER);
                       
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                        $this->addFlash('error', 'Une erreur est survenue lors de lenregistrement de l\'image, veuillez réssayer.');
                    return $this->renderForm('admin/homeslider/new.html.twig', [
                        'form' => $form,
                    ]);
                    }
                }
                else{
                    $this->addFlash('error', 'Extension image non valide.');
                    return $this->renderForm('admin/homeslider/new.html.twig', [
                        'form' => $form,
                      ]);
                }
                
            }
            else{
                $this->addFlash('error', 'Veuillez entrer une image.');
                return $this->renderForm('admin/homeslider/new.html.twig', [
                    'form' => $form,
                  ]);
            }
        }

        return $this->renderForm('admin/homeslider/new.html.twig', [
            'home_slider' => $homeSlider,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/admin/homeslider/upadteConfig", name="homeslider_upadteConfig",  methods={"GET", "POST"})
     */
    public function upadteConfig(Request $request, EntityManagerInterface $entityManager, ConfigurationRepository $configurationRepository)
    {
        $configurationRepository->UpdateConfiguration('homeslider_pause_on_hover',0);
        $configurationRepository->UpdateConfiguration('homeslider_wrap',0);
        foreach($request->query as $key=>$item)
        { 
            if($key == "homeslider_pause_on_hover" || $key == "homeslider_wrap")
            {
                $item = 1;  
            }
            $configurationRepository->UpdateConfiguration($key,$item);
        }
        $this->addFlash('success', 'Mise à jour effectuée avec succés');
        return $this->redirectToRoute('homeslider', [], Response::HTTP_SEE_OTHER);
    }

     /**
     * @Route("/admin/homeslider/reorder", name="homeslider_reorder", methods={"GET", "POST"})
    */
    public function reorder(Request $request, EntityManagerInterface $entityManager, HomeSliderRepository $homeSliderRepository): Response
    {     
       $tableOrder = (array)$request->request->get('order');
       
       
       foreach ($tableOrder as $k=>$order)
       { 
          $idSlide = str_replace('slide_','',$order);
          $slide = $homeSliderRepository->find($idSlide);
          $position = $k + 1;
          $slide->setPosition($position);
          $entityManager->flush();
       }
     
        return $this->json([
            'success' => true,
            'data' => 'Position mis à jour.'
        ]); 
    }

    /**
     * @Route("/admin/homeslider/{id}/edit", name="homeslider_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, HomeSlider $homeSlider, EntityManagerInterface $entityManager): Response
    {
        $oldImage = $homeSlider->getImage();
        $form = $this->createForm(HomeSliderType::class, $homeSlider);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $request->files->get('home_slider');
            if($imageFile['image'] !== null)
            {
                $originalFilename = $imageFile['image']->getClientOriginalName();
                $extensionImage = $imageFile['image']->guessExtension();
                $valideExtension = array('jpg', 'png', 'webp');
                if (in_array($extensionImage, $valideExtension))
                {
                    try {
                        $imageFile['image']->move(
                            $this->getParameter('kernel.project_dir').'/public/uploads/carrousel/',
                            $originalFilename 
                        );
                        
                        $homeSlider->setImage($originalFilename);
                        if($form->getData()->getStatus())
                        {
                            $homeSlider->setStatus('1');
                        }
                        else{
                            $homeSlider->setStatus('0');
                        }
                        $entityManager->flush();
                        $newlFilename = "homeslider_".$homeSlider->getId().'.'.$extensionImage;
                        rename($this->getParameter('kernel.project_dir').'/public/uploads/carrousel/'.$originalFilename, $this->getParameter('kernel.project_dir').'/public/uploads/carrousel/'.$newlFilename);
                        $homeSlider->setImage($newlFilename);
                        $entityManager->flush();
                        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                        return $this->redirectToRoute('homeslider', [], Response::HTTP_SEE_OTHER);
                           
                        } catch (FileException $e) {
                            // ... handle exception if something happens during file upload
                            $this->addFlash('error', 'Une erreur est survenue lors de lenregistrement de l\'image, veuillez réssayer.');
                        return $this->renderForm('admin/homeslider/edit.html.twig', [
                            'form' => $form,
                        ]);
                        }
                }
                else{
                    $this->addFlash('error', 'Extension image non valide.');
                    return $this->renderForm('admin/homeslider/new.html.twig', [
                        'form' => $form,
                      ]);
                }
                
            }
            else if($oldImage == "" ){

                $this->addFlash('error', 'Veuillez entrer une image.');
                return $this->renderForm('admin/homeslider/edit.html.twig', [
                    'form' => $form,
                  ]);
            }
            else{
                $entityManager->flush();
                $this->addFlash('success', 'Mise à jour effectuée avec succés.');
                return $this->redirectToRoute('homeslider', [], Response::HTTP_SEE_OTHER);
            }
        }
        if($oldImage !=='')
        {
            $pathImage =  $this->getParameter('kernel.project_dir').'/public/uploads/carrousel/'.$oldImage;
            $url_image =  'uploads/carrousel/'.$oldImage;
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
        
        return $this->renderForm('admin/homeslider/edit.html.twig', [
            'home_slider' => $homeSlider,
            'form' => $form,
            'oldImage' => $imageSlider
        ]);
    }

    /**
     * @Route("/admin/homeslider/{id}", name="homeslider_delete", methods={"GET", "POST"})
     */
    public function delete(Request $request, HomeSlider $homeSlider, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($homeSlider);
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
        return $this->redirectToRoute('homeslider', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/admin/homeslider/{id}/changestatus", name="homeslider_changestatus", methods={"GET", "POST"})
     */
    public function changestatus(Request $request, HomeSlider $homeSlider, EntityManagerInterface $entityManager): Response
    {
        $status = $request->query->get('status');
        $homeSlider->setStatus($status);
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés.');
        return $this->redirectToRoute('homeslider', [], Response::HTTP_SEE_OTHER);
    }
}
