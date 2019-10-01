<?php

namespace App\Repository;

use App\Entity\Kinoteatr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Kinoteatr|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kinoteatr|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kinoteatr[]    findAll()
 * @method Kinoteatr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KinoteatrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kinoteatr::class);
    }

    // /**
    //  * @return Kinoteatr[] Returns an array of Kinoteatr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Kinoteatr
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
