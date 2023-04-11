<?php

namespace App\Repository;

use App\Entity\Configuration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Configuration|null find($id, $lockMode = null, $lockVersion = null)
 * @method Configuration|null findOneBy(array $criteria, array $orderBy = null)
 * @method Configuration[]    findAll()
 * @method Configuration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Configuration::class);
    }

    // /**
    //  * @return Configuration[] Returns an array of Configuration objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Configuration
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findSeetings($setting)
    {
        return $this->createQueryBuilder('c')
        ->andWhere('c.name LIKE :val')
        //->setParameter('val', $setting)
        ->setParameter(':val',  $setting . '%')
        ->getQuery()
        ->getResult()
        ;
    }

    public function UpdateConfiguration ($name,$value)
    {
        $query = $this->createQueryBuilder('c')
                ->update()
                ->set('c.value', ':value')
                ->where('c.name = :name')
                ->setParameter('name', $name)
                ->setParameter('value', $value)
                ->getQuery();
        $result = $query->execute();
        return $result;
    }
}
