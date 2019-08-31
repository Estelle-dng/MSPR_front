<?php

namespace App\Repository;

use App\Entity\CommandDetailsHasOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CommandDetailsHasOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandDetailsHasOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandDetailsHasOption[]    findAll()
 * @method CommandDetailsHasOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandDetailsHasOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandDetailsHasOption::class);
    }

    // /**
    //  * @return CommandDetailsHasOption[] Returns an array of CommandDetailsHasOption objects
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
    public function findOneBySomeField($value): ?CommandDetailsHasOption
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
