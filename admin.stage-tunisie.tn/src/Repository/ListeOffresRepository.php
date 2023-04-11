<?php

namespace App\Repository;

use App\Entity\ListeOffres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListeOffres|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeOffres|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeOffres[]    findAll()
 * @method ListeOffres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeOffresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeOffres::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ListeOffres $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(ListeOffres $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function findListeBytitre($titre)
    {
        return $this->createQueryBuilder('lo')
            ->andWhere('lo.titre = :val')
            ->setParameter('val', $titre)
            ->getQuery()
            ->getResult()
        ;
    }


    public function findLastOffres($nb = 20)
    {
        return $this->createQueryBuilder('lo')
            ->select('lo.id,lo.titre,lo.date_debut_stage,lo.date_fin_stage,lo.type_contrat,lo.description_offres,categories.titre As titre_categorie,membres.photo As photo_membre ') 
            ->join('lo.categories','categories')
            ->join('lo.membres','membres')
            ->andWhere('lo.actif = :val')
             ->setParameter('val', 1)
             ->orderBy('lo.date_debut_stage', 'DESC')
            ->setMaxResults($nb)
            ->getQuery()
            ->getResult()
        ;
    }
    
}
