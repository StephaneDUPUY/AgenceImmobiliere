<?php

namespace App\Repository;

use App\Entity\Estate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Estate|null find($id, $lockMode = null, $lockVersion = null)
 * @method Estate|null findOneBy(array $criteria, array $orderBy = null)
 * @method Estate[]    findAll()
 * @method Estate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Estate::class);
    }

    // /**
    //  * @return Estate[] Returns an array of Estate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Estate
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
