<?php

namespace App\Repository;

use App\Entity\DPAT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DPAT>
 *
 * @method DPAT|null find($id, $lockMode = null, $lockVersion = null)
 * @method DPAT|null findOneBy(array $criteria, array $orderBy = null)
 * @method DPAT[]    findAll()
 * @method DPAT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DPATRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DPAT::class);
    }

//    /**
//     * @return DPAT[] Returns an array of DPAT objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DPAT
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
