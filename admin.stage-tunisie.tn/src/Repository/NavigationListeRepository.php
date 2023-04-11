<?php

namespace App\Repository;

use App\Entity\NavigationListe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NavigationListe|null find($id, $lockMode = null, $lockVersion = null)
 * @method NavigationListe|null findOneBy(array $criteria, array $orderBy = null)
 * @method NavigationListe[]    findAll()
 * @method NavigationListe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NavigationListeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NavigationListe::class);
    }

    // /**
    //  * @return NavigationListe[] Returns an array of NavigationListe objects
    //  */
    /*
    
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NavigationListe
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findByNav($navigation)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.navigation = :val')
            ->setParameter('val', $navigation)
            ->orderBy('n.ordre', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

  

    public function findnavigationByTitre($titre)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.titre = :val')
            ->setParameter('val', $titre)
            ->getQuery()
            ->getResult()
        ;
    }
    public function getNavigationParent($idNavigationListe)
    {
        return $this->createQueryBuilder('nl')
            ->select('nl.navigation_id')
            ->andWhere('nl.id = :val')
            ->setParameter('val', $idNavigationListe)
            ->getQuery()
            ->getResult()
        ;
    }

 
    
    public function FindChildById ($navigationListe)
    {
        return $this->createQueryBuilder('nl')
        //->select('nl.id')
        ->andWhere('nl.id_parent = :val')
        ->setParameter('val', $navigationListe)
        ->getQuery()
        ->getResult()
    ;
    }



    public function FindMenu ()
    {
        return $this->createQueryBuilder('m')
        ->select('m.id,m.titre,m.id_parent,m.ordre')
        ->andWhere('m.id_parent = :val')
        ->setParameter('val', 0)
        ->orderBy('m.ordre', 'ASC')
        ->getQuery()
        ->getResult()
    ;
    }

    public function findLastPosition($type)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.type = :val')
            ->setParameter('val', $type)
            ->orderBy('c.ordre', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }

}
