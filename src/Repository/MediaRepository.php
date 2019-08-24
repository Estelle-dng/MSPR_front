<?php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class MediaRepository extends EntityRepository {

    public function unusedMedia($date) {
        $query = $this->createQueryBuilder('m')
            ->Where('m.createdAt <= :date')

           // ->leftJoin('Slider', 's',  'WITH',  's.media = m.id')
           // ->andWhere('s.id IS NULL')

            ->setParameters(array(
                'date' => $date
            ))
            ->getQuery();

        return $query->getResult();
    }
}
