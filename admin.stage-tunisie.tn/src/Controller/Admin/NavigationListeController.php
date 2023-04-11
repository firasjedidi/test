<?php

namespace App\Controller\Admin;

use App\Entity\Navigation;
use App\Entity\NavigationListe;
use App\Form\NavigationListeType;
use App\Repository\NavigationListeRepository;
use App\Repository\NavigationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use phpDocumentor\Reflection\PseudoTypes\True_;
use SebastianBergmann\Environment\Console;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;

class NavigationListeController extends AbstractController
{
    /**
     * @Route("admin/navigation_liste/", name="navigation_liste", methods={"GET"})
     */
    public function index(Request $request,NavigationListeRepository $navigationListeRepository,NavigationRepository $navigationRepository): Response
    {    
        $navigation= $request->query->get('id');
        return $this->render('admin/navigation_liste/index.html.twig', [
            'navigation_liste' => $navigationListeRepository->findByNav($navigation),
            'ItemsNavigations' => $navigationRepository->findById($navigation), 
        ]);
    }

    /**
     * @Route("admin/navigation_liste/new/{id}", name="navigation_liste_new", methods={"GET", "POST"})
     */
    public function new(Request $request,$id,EntityManagerInterface $entityManager, NavigationListeRepository $navigationListeRepository): Response
    {



        $liste_ids2 = $navigationListeRepository->findAll();
        $navigationListe = new NavigationListe();
      
        $form = $this->createForm(NavigationListeType::class, $navigationListe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $titre = $form->getData()->getTitre();
            $is_existe_secteur = $navigationListeRepository->findnavigationByTitre($titre);
            if($is_existe_secteur)
            {
                $this->addFlash('error', 'Un secteur est déjà existe avec ce titre');
                return $this->renderForm('admin/navigation_liste/new.html.twig', [
                    'form' => $form,
                  ]);
            }
            $id_navigation = $form->getData()->getNavigation()->getId();
        
                $navigationListe->setIdParent($request->request->get('id_parent'))  ;
          
            
          
           
            $entityManager->persist($navigationListe);
            $entityManager->flush();
            $this->addFlash(
                'Succes',
                'Vos modifications ont été enregistrées avec succes !'
            );
            return $this->redirectToRoute('navigation_items', ['id'=>$id_navigation], Response::HTTP_SEE_OTHER);
        }
            
        
        return $this->renderForm('admin/navigation_liste/new.html.twig', [
            'navigationListe' => $navigationListe,
            'form' => $form,
            'id_navigation' => $id,
            'liste_ids2'=> $liste_ids2,
           
        ]);
    }
     /**
     * @Route("/admin/navigation_liste/updateStatus", name="navigation_liste_updateStatus", methods={"GET", "POST"})
    */
    public function updateStatus(Request $request, EntityManagerInterface $entityManager, navigationListeRepository $navigationListeRepository): Response
    {     
        $idNavigationListe = (int)$request->request->get('idNavigationListe');
        $newActif = (int)$request->request->get('actif');
        $navigationListe = $navigationListeRepository->find($idNavigationListe);
        $navigationListe->setActif($newActif);
        $entityManager->flush();
       
        return $this->json([
            'success' => true,
            'data' => 'Status mis à jour.'
        ]); 
    }

     /**
     * @Route("/admin/navigation_liste/activeSelected", name="navigation_liste_activeSelected",  methods={"GET", "POST"})
     */
    public function activeSelected(Request $request, EntityManagerInterface $entityManager, navigationListeRepository $navigationListeRepository): Response
    {
        $elementsSelected = $request->query->get('listSelected');
        $id_navigation =$request->query->get('id');
        $actif = (bool) $request->query->get('actif');
        $tabElements = explode(",", $elementsSelected);
        foreach ($tabElements as $element)
         {
            $navigationListe = $navigationListeRepository->find($element);
            $navigationListe->setActif($actif);
         }
        //  $id_navigation = $form->getData()->getNavigation()->getId();
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés');
         return $this->redirectToRoute('navigation_items', ['id'=>$id_navigation], Response::HTTP_SEE_OTHER);
    }

     /**
     * @Route("/admin/navigation_liste/deleteSelected", name="navigation_liste_deleteSelected",  methods={"GET", "POST"})
     */
    public function deleteSelected(Request $request, EntityManagerInterface $entityManager, navigationListeRepository $navigationListeRepository): Response
    {
        $elementsSelected = $request->query->get('listSelected');
        $id_navigation =$request->query->get('id');
        $tabElements = explode(",", $elementsSelected);




           /*  $id_parent_exist =  $id_navigation == $liste_ids_parent ;
        if( $id_parent_exist)
        {
            $this->addFlash('error', "Toute l'arborescence va etre supprimé");
            return $this->renderForm('admin/navigation_liste/new.html.twig', [
                
              ]);
        }*/
        foreach ($tabElements as $element)
         {
            $navigationListe = $navigationListeRepository->find($element);
            $entityManager->remove($navigationListe);  
         }
         
        $entityManager->flush();
        $this->addFlash('success', 'Mise à jour effectuée avec succés');
         return $this->redirectToRoute('navigation_liste', ['id'=>$id_navigation], Response::HTTP_SEE_OTHER);
    }
  

    
    /**
     * @Route("/admin/navigation_liste/{id}/edit", name="navigation_liste_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, NavigationListe $navigationListe, EntityManagerInterface $entityManager, navigationListeRepository $navigationListeRepository): Response
    {
       
       // $item_checked = $navigationListeRepository->findById('$navigationListe.id');

        
        $liste_ids = $navigationListeRepository->findAll();
        $liste_ids2 = $navigationListeRepository->findAll();
        $idNaviagtionParent = $navigationListe->getNavigation()->getId();
      

        //    $pos=array_search($navigationListe, $liste_ids );
            unset($liste_ids2[array_search($navigationListe, $liste_ids2)]);


        $form = $this->createForm(NavigationListeType::class, $navigationListe);
       
        $form->handleRequest($request);
      
     
        if ($form->isSubmitted() && $form->isValid()) {
            // dump($request->request->get('id_parent'));
            // die();
            $id_navigation = $form->getData()->getNavigation()->getId();

            $navigationListe->setIdParent($request->request->get('id_parent'));
            
            $entityManager->flush();
            $this->addFlash(
                'Succes',
                'Vos modifications ont été enregistrées avec succes !'
            );
            return $this->redirectToRoute('navigation_items', ['id'=>$id_navigation], Response::HTTP_SEE_OTHER);
        }
            
        
        return $this->renderForm('admin/navigation_liste/edit.html.twig', [
        
            'navigationListe' => $navigationListe,
            'form' => $form,
            'id_navigation' => $idNaviagtionParent,
            'liste_ids'=> $liste_ids,
            'liste_ids2'=> $liste_ids2,

        ]);
    }

    /**
     * @Route("/admin/navigation_liste/{id}", name="navigation_liste_delete", methods={"GET", "POST"})
     */
    public function delete(Request $request, navigationListe $navigationListe, EntityManagerInterface $entityManager, navigationListeRepository $navigationListeRepository): Response
    {
      
        $id_navigation = $navigationListe->getNavigation()->getId();
        // on chonge id_parent des childs par null
        $id_navigation_liste = $navigationListe->getId();
        $listChild = $navigationListeRepository->FindChildById( $id_navigation_liste);
        foreach($listChild as $item){
            $item->setIdParent(0);
            $entityManager->flush();
          }
       
        //$id_navigation = $navigationListe->getId();
        $entityManager->remove($navigationListe);
        $entityManager->flush();
        $this->addFlash('success', 'navigation supprimé avec succés');
        return $this->redirectToRoute('navigation_items', ['id'=>$id_navigation], Response::HTTP_SEE_OTHER);
    }

     /**
     * @Route("/admin/navigation_liste/change/reorder", name="navigation_liste_reorder", methods={"GET", "POST"})
    */
    public function reorder(Request $request, EntityManagerInterface $entityManager, navigationListeRepository $navigation_listeRepository): Response
    {     
       $tableOrder = (array)$request->request->get('order');

         foreach ($tableOrder as $k=>$order)
     { 
          $navigationListe = $navigation_listeRepository->find($order);
          if($navigationListe){
            $position = $k + 1;
            $navigationListe->setOrdre($position);
            $entityManager->flush();
          }

       }
        return $this->json([
            'success' => true,
            'data' => 'Position mis à jour.'
            
        ]); 
    }


    


}
