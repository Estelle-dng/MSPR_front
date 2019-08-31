<?php

namespace App\Repository;

use App\Entity\CategoryHasSeason;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CategoryHasSeason|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryHasSeason|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryHasSeason[]    findAll()
 * @method CategoryHasSeason[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryHasSeasonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryHasSeason::class);
    }

    // /**
    //  * @return CategoryHasSeason[] Returns an array of CategoryHasSeason objects
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
    public function findOneBySomeField($value): ?CategoryHasSeason
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
