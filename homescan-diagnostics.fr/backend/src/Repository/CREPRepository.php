<?php

namespace App\Repository;

use App\Entity\CREP;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CREP>
 *
 * @method CREP|null find($id, $lockMode = null, $lockVersion = null)
 * @method CREP|null findOneBy(array $criteria, array $orderBy = null)
 * @method CREP[]    findAll()
 * @method CREP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CREPRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CREP::class);
    }

//    /**
//     * @return CREP[] Returns an array of CREP objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CREP
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
