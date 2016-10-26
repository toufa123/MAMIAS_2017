<?php

namespace MAMIAS\NISBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class AlienSpeciesRepository extends EntityRepository {

    public function getNBnis() {

        return $this->createQueryBuilder('b')
                        ->select('count(b.id)')
                        //->where('b.invasive = TRUE')
                        ->getQuery()
                        ->getSingleScalarResult();
    }

    public function getNBnise() {

        return $this->createQueryBuilder('b')
                        ->select('count(b.id) as number')
                        //->from ('MAMIAS\HomeBundle\Entity\AlienSpecies','b')
                        ->innerJoin('b.medSuccess', 'c')
                        ->where('c.id = 7')
                        ->getQuery()
                        ->getSingleScalarResult();
    }

    public function getNBnisi() {

        return $this->createQueryBuilder('b')
                        ->select('count(b.id)')
                        //->from ('MAMIAS\HomeBundle\Entity\AlienSpecies','b')
                        ->innerJoin('b.medSuccess', 'c')
                        ->where('c.id = 9')
                        ->getQuery()
                        ->getSingleScalarResult();
    }

    public function getNBNISstatus() {

        return $this->createQueryBuilder('b')
                        ->select('count(b.id)', 'c.successType')
                        //->from ('MAMIAS\HomeBundle\Entity\AlienSpecies','b')
                        ->innerJoin('b.medSuccess', 'c')
                        // ->where('c.id = 9')
                        ->GroupBy('c.id')
                        ->getQuery()
                        //->getResult();
                        ->getResult();
    }

    public function findBystatus() {

        return $this->createQueryBuilder('b')
                        ->select('count(b.id)', 'c.successType', 'd.ecofunctional')
                        //->from ('MAMIAS\HomeBundle\Entity\AlienSpecies','b')
                        ->innerJoin('b.ecofunctional', 'd')
                        ->innerJoin('b.medSuccess', 'c')
                        ->where('c.id = 7')
                        ->GroupBy('d.id', 'c.id', 'c.successType','d.ecofunctional')
                        ->getQuery()
                        //->getResult();
                        ->getResult();
    }

    public function findByOrigin() {

        return $this->createQueryBuilder('b')
                        ->select('count(b.id)', 'c.originRegion')
                        //->from ('MAMIAS\HomeBundle\Entity\AlienSpecies','b')
                        //->innerJoin('b.ecofunctional', 'd')
                        ->innerJoin('b.origin', 'c')
                        //->where('c.id = 7')
                        //->GroupBy('d.id','c.id')
                        ->GroupBy('c.id','c.originRegion')
                        ->getQuery()
                        //->getResult();
                        ->getResult();
    }

    public function getVector() {
        return $this->createQueryBuilder('b')
                        ->select('count(b.id)', 'c.vector')
                        ->innerJoin('b.vector', 'c')
                        ->innerJoin('d.vectorName', 'c')
                        ->GroupBy('d.vectorName')
                        ->getQuery()
                        ->getResult();
    }
      public function getTrigger() {

        return $this->createQueryBuilder('b')
                        ->select('b')
                        ->where('b.trigger = TRUE')
                        ->getQuery()
                        ->getResult();
                        
    }
    

}
