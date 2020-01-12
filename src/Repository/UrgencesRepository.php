<?php

namespace App\Repository;

use App\Entity\Urgences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Urgences|null find($id, $lockMode = null, $lockVersion = null)
 * @method Urgences|null findOneBy(array $criteria, array $orderBy = null)
 * @method Urgences[]    findAll()
 * @method Urgences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UrgencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Urgences::class);
    }

    // /**
    //  * @return Urgences[] Returns an array of Urgences objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Urgences
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
