<?php

namespace App\Repository;

use App\Entity\GestionActualites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GestionActualites>
 *
 * @method GestionActualites|null find($id, $lockMode = null, $lockVersion = null)
 * @method GestionActualites|null findOneBy(array $criteria, array $orderBy = null)
 * @method GestionActualites[]    findAll()
 * @method GestionActualites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GestionActualitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GestionActualites::class);
    }

    public function add(GestionActualites $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GestionActualites $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GestionActualites[] Returns an array of GestionActualites objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GestionActualites
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function findActu()
    {
        return $this->createQueryBuilder('a')
            ->select('a.id,a.date_debut,a.titre,a.courte_description,a.image')
            ->andWhere('a.active = true')
            ->getQuery()
            ->getResult();
    }

}
