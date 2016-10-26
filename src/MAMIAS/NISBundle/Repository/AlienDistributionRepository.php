<?php

namespace MAMIAS\NISBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AlienDistributionRepository extends EntityRepository {
    
    public function getNb($i) {

        return $this->createQueryBuilder('l')
                        ->select('COUNT(l)')
                        ->where('l.id = '.$i)
                        ->getQuery()
                        ->getSingleScalarResult();
    }
    public function getPieC($i) {

        return $this->createQueryBuilder('l')
                        ->select('COUNT(distinct l.species)')
                        ->where('l.country = '.$i)
                        ->getQuery()
                        ->getSingleScalarResult();
    }

    public function getPieT($i) {

        return $this->createQueryBuilder('l')
                        ->select('COUNT(distinct l.species)')
                        ->getQuery()
                        ->getSingleScalarResult();
    }

    public function getNbSp($i) {

        return $this->createQueryBuilder('l')
                        ->select('COUNT(distinct l.species)')
                        ->where('l.country = '.$i)
                        ->getQuery()
                        ->getSingleScalarResult();
    }

}
