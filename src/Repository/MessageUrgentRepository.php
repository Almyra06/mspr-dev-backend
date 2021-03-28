<?php

namespace App\Repository;

use App\Entity\MessageUrgent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MessageUrgent|null find($id, $lockMode = null, $lockVersion = null)
 * @method MessageUrgent|null findOneBy(array $criteria, array $orderBy = null)
 * @method MessageUrgent[]    findAll()
 * @method MessageUrgent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageUrgentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MessageUrgent::class);
    }

    // /**
    //  * @return MessageUrgent[] Returns an array of MessageUrgent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MessageUrgent
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
