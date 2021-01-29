<?php

namespace App\Repository;

use App\Entity\Festivalier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Festivalier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Festivalier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Festivalier[]    findAll()
 * @method Festivalier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FestivalierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Festivalier::class);
    }

    // /**
    //  * @return Festivalier[] Returns an array of Festivalier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Festivalier
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
