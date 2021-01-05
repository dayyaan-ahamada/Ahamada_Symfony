<?php

namespace App\Repository;

use App\Entity\Concert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Concert|null find($id, $lockMode = null, $lockVersion = null)
 * @method Concert|null findOneBy(array $criteria, array $orderBy = null)
 * @method Concert[]    findAll()
 * @method Concert[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConcertRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Concert::class);
    }

    // /**
    //  * @return Concert[] Returns an array of Show objects
    //  */

    public function findNext()
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.date > :now')
            ->setParameter('now', new \DateTime('now'))
            ->orderBy('c.date', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    public function joinBandConcert()
    {
        return $this->createQueryBuilder('c')
            ->addSelect('r')
            ->leftJoin('c.concert','r');
    }

    /*
    public function findOneBySomeField($value): ?Show
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
