<?php

namespace MAMIAS\NISBundle\Repository;
use Doctrine\ORM\EntityRepository;

class AlienCountryRepository extends EntityRepository {
    public function getLat($i) {
        
        return $this->createQueryBuilder('l')
                        ->select('l.latitude')
                        ->where('l.id = '.$i)
                        ->getQuery()
                        ->getResult();
    }
     public function getCountryName($i) {
        
        return $this->createQueryBuilder('l')
                        ->select('l.country')
                        ->where('l.id = '.$i)
                        ->getQuery()
                        ->getResult();
    }
    public function getLng($i) {

        return $this->createQueryBuilder('l')
                        ->select('l.longitude')
                        ->where('l.id = '.$i)
                        ->getQuery()
                        ->getResult();
    }
        public function getNbCountry() {

        return $this->createQueryBuilder('l')
                        ->select('COUNT(l)')
//                        ->where('l.country = 1')
                        ->getQuery()
                        ->getSingleScalarResult();
    }
}
