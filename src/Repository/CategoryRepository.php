<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\CategorySearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;



/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }


    public function findByFilter(CategorySearch $search)
    {
        $qb = $this->createQueryBuilder('c');

        if ($search->getMinCapacity()) /* Si j'ai un getMinCapacity je lui rajoute un where */
        {
            $qb->andWhere('c.capacity >= :mincapacity') /* je veux que c.capacity/la capacité de mon bien soit >= à celle donnée */
                ->setParameter('mincapacity', $search->getMinCapacity()); /* Le paramètre minCapacity aura la valeur de la recherche*/
        }
        if ($search->getname()) /* Si j'ai un getName je lui rajoute un where */
        {
            $qb->andWhere('c.name = :name') /* je veux que c.name/le nom de mon bien soit = à celui donné */
                ->setParameter('name', $search->getname());  /* Le paramètre Name aura la valeur de la recherche*/
        }

        return $qb->getQuery()->getResult();
    }




    // /**
    //  * @return Category[] Returns an array of Category objects
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
    public function findOneBySomeField($value): ?Category
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
