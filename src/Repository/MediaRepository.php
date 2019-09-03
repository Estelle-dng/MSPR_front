<?php
namespace App\Repository;

use App\Entity\Media;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class MediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Media::class);
    }
/*    public function unusedMedia($date) {
        $query = $this->createQueryBuilder('m')
            ->Where('m.createdAt <= :date')

           // ->leftJoin('Slider', 's',  'WITH',  's.media = m.id')
           // ->andWhere('s.id IS NULL')

            ->setParameters(array(
                'date' => $date
            ))
            ->getQuery();

        return $query->getResult();
    }*/
}
