<?php

namespace App\Repository;

use App\Entity\Userorder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Userorder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Userorder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Userorder[]    findAll()
 * @method Userorder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserorderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Userorder::class);
    }

    // /**
    //  * @return Userorder[] Returns an array of Userorder objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Userorder
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
