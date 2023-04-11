<?php
declare(strict_types=1);
namespace App\Controller\Api;

use App\Repository\BlocsCmsRepository;
use FOS\RestBundle\View\View;
use App\Repository\EcolesRepository;
use App\Repository\HomeSliderRepository;
use App\Repository\NavigationRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ListeOffresRepository;
use App\Repository\ConfigurationRepository;
use App\Repository\DepartementsRepository;
use App\Repository\CategoriesRepository;
use App\Repository\FonctionsRepository;
use App\Repository\MembresRepository;
use App\Repository\NavigationListeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use SebastianBergmann\Environment\Console;
use App\Repository\GestionActualitesRepository;
use App\Repository\VillesRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Entity\Membres;
use App\Entity\Emailsubscription;
use DateTimeInterface;
use Doctrine\Common\Annotations\AnnotationReader;
use Exception;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;  
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
class IndexController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/lastOffres")
     */
    public function getLastOffres(ListeOffresRepository $listeOffresRepository)
    { 
        $resultats = [];
        $listeOffres = $listeOffresRepository->findLastOffres(20);
        if ($listeOffres) {
            foreach ($listeOffres as $value) {
                $resultats[] = [
                                'id'=> $value['id'],
                                'titre'=> $value['titre'],
                                'date_debut_stage'=> $value['date_debut_stage'],
                                'date_fin_stage'=> $value['date_fin_stage'],
                                'description_offres'=> $value['description_offres'],
                                'titre_categorie'=> $value['titre_categorie'],
                                'photo_membre'=> $value['photo_membre'],
                                'type_contrat'=> $this->getTypeContrat($value['type_contrat'])
                            ];
            }
        }
        return View::create($resultats, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/navlinks")
     */
    public function getNavHeaderlinks(NavigationListeRepository $navigationListeRepository, NavigationRepository $navigationRepository)
    {
        $navigation = $navigationRepository->findById(1);
        // $navlinks = $navigationListeRepository->findNavHeaderlinks($navigation);
        $navlinks = $navigationListeRepository->findByNav($navigation);
        dd($navlinks);
        // View::create($navlinks, Response::HTTP_OK);
        return View::create($navlinks, Response::HTTP_OK);
    }
    /**
     * @Rest\Get("/homeslider")
     */
    public function getHomeSlider(HomeSliderRepository $homeSliderRepository)
    {
        $condition = array('status' => 1);
        $listHomeSlides =  $homeSliderRepository->findBy($condition, array('position' => 'ASC'));
        return View::create($listHomeSlides, Response::HTTP_OK);
    }
     /**
     * @Rest\Get("/configuration")
     */
    public function getSeeting(Request $request,ConfigurationRepository $configurationRepository)
    {
        $itemsConfig = $configurationRepository->findSeetings($request->query->get('name'));
        return View::create($itemsConfig, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/fonction")
     */
    public function getAllFonction(FonctionsRepository $fonctionsRepository)
    {
        $listeFonction = $fonctionsRepository-> FindAllFonction();
        return View::create($listeFonction , Response::HTTP_OK);
    }


    /**
     * @Rest\Get("/departements")
     */
    public function FindAllDepartement(DepartementsRepository $departementsRepository)
    {
        $listeDepartement = $departementsRepository-> FindAllDepartement();
        return View::create($listeDepartement , Response::HTTP_OK);
    }

    
    /**
     * @Rest\Get("/menu")
     */
    public function getMenu(NavigationListeRepository $navigationListeRepository)
    {
        $liste = [];
        $navigationListe =   $navigationListeRepository ->FindMenu();
      
        if ($navigationListe) {
            foreach ($navigationListe as $key => $value) {
                $child = [];
                $childListe =   $navigationListeRepository ->findBy(['id_parent'=>$value['id']]);
                if ($childListe) {
                    foreach ($childListe as $key => $child_item) {
                        $child[] = ['id'=> $child_item->getId(),'titre'=>$child_item->getTitre()];
                    }
             
                }
                $liste[] = ['id'=> $value['id'],'titre'=>$value['titre'],'child'=> $child];
            }
        }
        return View::create($liste, Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/bloc_cms")
     */
    public function FindAllBlocCMS(BlocsCmsRepository $BlocsCmsRepository)
    {
        $listeblocs =  $BlocsCmsRepository-> FindAllBlocCMS();
        return View::create($listeblocs , Response::HTTP_OK);
    }


             /**
     * @Rest\Get("/bloc_cms1")
     */
    public function FindBlocCMS(Request $request,BlocsCmsRepository $BlocsCmsRepository)
    {
        $actif =1;
        $hook =  $request->query->get('hook');
        $listeblocs =  $BlocsCmsRepository-> FindBlocCMSByHook($hook,$actif);
        return View::create($listeblocs , Response::HTTP_OK);
    } 

        /**
     * @Rest\Get("/entreprise")
     */
    public function FindAllEntreprise(MembresRepository $MembresRepository)
    {
      
        $entreprises =  $MembresRepository-> FindAllEntreprise();
        return View::create($entreprises , Response::HTTP_OK);
    }

    function getTypeContrat($type){
        $resultat = null;
        switch ($type) {
            case 1:
               return 'Stage d’observation ou d’initiation (SIVP)';
            case 2:
               return 'Stage d’application';
            case 3:
              return 'Stage de fin d’études';
            case 4:
              return 'Stage de fin d’années';
        }

        return $resultat;
    }


    /**
     * @Rest\Get("/actualite")
     */
    public function getAllActu(GestionActualitesRepository $gestionActualitesRepository)
    {
        $resultat = [];
        $actualite = $gestionActualitesRepository->findActu();
        foreach ($actualite as  $value) {
            $resultat[] = [
                        'titre'=> $value['titre'],
                        'date_debut'=> $value['date_debut']->format('d').' '.$value['date_debut']->format('M').' '.$value['date_debut']->format('Y'),
                        'courte_description'=>$value['courte_description'],
                        'image'=> $value['image']
            ];
        }
        return View::create($resultat, Response::HTTP_OK);
    }
        /**
     * @Route("/new/membres", name="membres_new_api", methods={"POST"}   )
     * @param UserPasswordHasherInterface $passwordHasher 
     */
    
    public function new(Request $request, EntityManagerInterface $entityManager, MembresRepository $membresRepository,UserPasswordHasherInterface $passwordHasher, SluggerInterface $slugger,VillesRepository $VilleRepository,DepartementsRepository $DepartementsRepository,CategoriesRepository $CategoriesRepository,FonctionsRepository $fonctionsRepository): Response
    {
        // dd( $request->getContent());
        $membre = new Membres();
        $content =  json_decode($request->getContent());
        $existe_membre =  $membresRepository->findMembreByEmail($content->email);
        if ($existe_membre) {
            return $this->json(['error'=>'Un compte est déjà enregistré avec cet e-mail']);
        }else{
            $type = (int)$content->type;
            $date_add = new \DateTime ();
            $ville_id = intval($content->ville_id) ;
            $departement_id = intval($content->departement_id);
            $ville = $VilleRepository->find($ville_id);
            $fonction_id=$fonctionsRepository->find($content->fonction_id);
            $departement = $DepartementsRepository->find($departement_id);
            $category_id = $CategoriesRepository->find($content->category_id);
            $hashedPassword = $passwordHasher->hashPassword(
                $membre,
                $content->password
            );
            // dd($ville,$departement, $fonction_id,$departement , $category_id );  
            $membre ->setCivilite($content->civilite)        
                    ->setPrenom($content->prenom)
                    ->setNom($content->nom)
                    ->setEmail($content->email)
                    ->setType($type)
                    ->setDateAdd($date_add)
                    ->setPassword($hashedPassword)
                    ->setAdresse($content->adresse)
                    ->setCodePostal($content->code_postal)
                    ->setStatus($content->status)
                    ->setTel($content->tel)
                    ->setInscritNl($content->inscrit_nl)
                    ->setVilleId($ville)
                    ->setDepartementId($departement)
                    ->setPermis($content->permis)
                    ->setComplementAdresse($content->complement_adresse);
                   
             if ($type ===1) {
                 $membre->setDateNaissance(new \DateTime($content->date_naissance))
                 ->setNationalite($content->nationalite);   
             }                   
            if ($type === 2) {
               
                $membre->setCategoryId($category_id )
                        ->setRaisonSocial($content->raison_social)
                        ->setEffectifsEntreprise((int)$content->effectifs_entreprise)
                        ->setChiffreAffaire((float)$content->chiffre_affaire)
                        ->setFonctionId($fonction_id)
                        ->setDescription($content->description)
                        ->setFax($content->fax)
                        ->setSiteWeb($content->site_web);
            } 
            if ($type ===3) {
                $membre->setCategoryId($category_id)
                ->setProgrammeEcole($content->programme_ecole)
                ->setTitre($content->titre)
                ->setDescription($content->description)
                ->setFax($content->fax)
                ->setSiteWeb($content->site_web);
     
            }    
            // if ($content->photo !="") {
            //   dd($content->photo,$request->files ); 
            //     // $membre->setPhoto($content->photo); 
            //     $photo = $request->files->get('photo');
  
            //     $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            //     // this is needed to safely include the file name as part of the URL
            //     $safeFilename = $slugger->slug($originalFilename);
            //     $newFilename = $safeFilename.'-'.uniqid().'.'.$photo->guessExtension();
            
            //     // Move the file to the directory where brochures are stored
            //     try {
            //         $photo->move(
            //             $this->getParameter('membres_directory'),
            //             $newFilename  
            //         );
            //     } catch (FileException $e) {
            //         // ... handle exception if something happens during file upload
            //     }
            // } 
            if($membre->getInscritNl())
            {                
                $emailsubscription = new Emailsubscription();
                $emailsubscription->setIdMembre($membre);
                $emailsubscription->setActif(true);
                $emailsubscription->setEmail($membre->getEmail());
                $emailsubscription->setNom($membre->getNom());
                $emailsubscription->setPrenom($membre->getPrenom());
                $emailsubscription->setType($membre->getType());
                $date_inscrit = new \DateTime ();
                $emailsubscription->setDateAdd($date_inscrit);
                $entityManager->persist($emailsubscription);
                $entityManager->flush();
            }
            try {   
                // dd($membre);
                $entityManager->persist($membre);
                $entityManager->flush();
              
                return  $this->json(['res'=>'succses']);    
            } catch (Exception $th) {
                return  $this->json(['err'=>$th]);
            }
        }

    }
    /**
     * @Route("/login/membres", name="membres_login_api", methods={"POST"}   )
     *  @param UserInterface $user
     * @param JWTTokenManagerInterface $JWTManager
     * @return JsonResponse
     */
    public function login(PasswordAuthenticatedUserInterface $user, JWTTokenManagerInterface $JWTManager): JsonResponse
    {
      
        return new JsonResponse(['token' => $JWTManager->create($user)]);
 
    }
     /**
     * @Route("/api/logout", name="api_logout")
     */
    public function logout()
    {
        // throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
   
     /**
     * @Route("/Categorys", name="api_Categorys", methods={"GET"})
     */
    public function getCategorys(Request $request, EntityManagerInterface $entityManager,CategoriesRepository $categoriesRepository):Response
    {
        $categorys = $categoriesRepository->findAll();
        $new=[];
        foreach ($categorys as $key =>  $value) {
           array_push($new,json_encode(["id"=> $value->getId(),"titre"=>$value->getTitre()]));
        }
        // dd($new);
        return $this->json([
            'categorys'=> $new
        ]); 
    }

     /**
     * @Route("/getVilles", name="api_membres_getVilles", methods={"GET","POST"})
     */
    public function getVilles(Request $request, EntityManagerInterface $entityManager,VillesRepository $villesRepository):Response
    {
        $id_departement = intval($request->query->get('idDepartement'));
        $villes = $villesRepository->findVillesByDepartement($id_departement);
        // dd($villes);
        return $this->json([
            'success' => true,
            'villes'=>$villes
        ]); 
    }
}