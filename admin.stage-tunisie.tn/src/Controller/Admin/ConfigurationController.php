<?php

namespace App\Controller\Admin;

use App\Entity\Configuration;
use App\Form\ConfigurationType;
use App\Repository\ConfigurationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


class ConfigurationController extends AbstractController
{
    /**
     * @Route("/admin/configuration", name="configuration", methods={"GET", "POST" })
     */
    public function index(Request $request, EntityManagerInterface $entityManager,ConfigurationRepository $configurationRepository): Response
    {
        $itemsConfig = $configurationRepository->findSeetings('site');
        $configuration = new Configuration();
        $form = $this->createForm(ConfigurationType::class, $configuration);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $logoFile = $request->files->get('site_logo');
            if ($logoFile) {
               // $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = 'logo.'.$logoFile->guessExtension();
                try {
                    $logoFile->move(
                        $this->getParameter('kernel.project_dir').'/public/uploads',
                        $newFilename
                    );
                    $configurationRepository->UpdateConfiguration('site_logo',$newFilename);
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                    echo "error upload logo";
                }
            }
            foreach($request->request as $key=>$item)
            {
                $configurationRepository->UpdateConfiguration($key,$item);
            }
            $this->addFlash('success', 'Mise à jour effectuée avec succés');
            return $this->redirectToRoute('configuration', [], Response::HTTP_SEE_OTHER);
        }
        $old_logo = $configurationRepository->findBy(array('name' => 'site_logo'));
        $old_logo_name = $old_logo[0]->getValue();
        if($old_logo_name !='')
        {
            $logoName =  $this->getParameter('kernel.project_dir').'/public/uploads/'.$old_logo_name;
            $url_umage =  'uploads/'.$old_logo_name;
            $file_exists = file_exists($logoName);
            $logo = array(
                'file_exists' => $file_exists,
                'filename' => $logoName,
                'url_image' => $url_umage
            );
        }
        else{
            $logo = ''; 
        }
       
        return $this->renderForm('admin/configuration/index.html.twig', [
            'configuration' => $configuration,
            'form' => $form,
            'itemsConfig' =>  $itemsConfig,
            'logo' => $logo
        ]);
    }

    /**
     * @Route("/admin/configuration/new", name="configuration_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $configuration = new Configuration();
        $form = $this->createForm(ConfigurationType::class, $configuration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($configuration);
            $entityManager->flush();

            return $this->redirectToRoute('configuration', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/configuration/new.html.twig', [
            'configuration' => $configuration,
            'form' => $form,
        ]);
    }

   

    /**
     * @Route("/admin/configuration/{id}/edit", name="configuration_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Configuration $configuration, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ConfigurationType::class, $configuration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('configuration', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/configuration/edit.html.twig', [
            'configuration' => $configuration,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/admin/configuration/{id}", name="configuration_delete", methods={"POST"})
     */
    public function delete(Request $request, Configuration $configuration, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$configuration->getId(), $request->request->get('_token'))) {
            $entityManager->remove($configuration);
            $entityManager->flush();
        }

        return $this->redirectToRoute('configuration', [], Response::HTTP_SEE_OTHER);
    }
}
