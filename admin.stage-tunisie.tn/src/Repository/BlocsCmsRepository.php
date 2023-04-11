<?php

namespace App\Repository;

use App\Entity\BlocsCms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BlocsCms|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlocsCms|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlocsCms[]    findAll()
 * @method BlocsCms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlocsCmsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlocsCms::class);
    }

    // /**
    //  * @return BlocsCms[] Returns an array of BlocsCms objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BlocsCms
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findByNav($BlocsCms)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.BlocsCms = :val')
            ->setParameter('val', $BlocsCms)
            ->orderBy('n.ordre', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAll()
    {
        return $this->findBy(array());
    }

    public function FindAllBlocCMS ()
    {
        return $this->createQueryBuilder('c')
       // ->select('c.id,c.title,c.description,c.image')
        ->getQuery()
        ->getResult()
    ;
    }

    public function FindBlocCMSByHook ($hook, $actif )
    {
        return $this->createQueryBuilder('c')
        ->andWhere('c.hook = :val')
        ->andWhere('c.actif = :val2')    
        ->setParameter('val',$hook)
        ->setParameter('val2', $actif)
        ->getQuery()
        ->getResult()
    ;
    } 

    public function findBlocByHook($hook)
    {
        return $this->createQueryBuilder('b')
            ->select('b.hook')
            ->andWhere('b.hook = :val')
            ->setParameter('val', $hook)
            ->getQuery()
            ->getResult()
        ;
    }

}
