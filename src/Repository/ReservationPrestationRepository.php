<?php

namespace App\Repository;

use App\Entity\ReservationPrestation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ReservationPrestation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationPrestation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationPrestation[]    findAll()
 * @method ReservationPrestation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationPrestationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationPrestation::class);
    }

    // /**
    //  * @return ReservationPrestation[] Returns an array of ReservationPrestation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReservationPrestation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
