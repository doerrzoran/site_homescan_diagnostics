<?php

namespace App\Repository;

use App\Entity\DPE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DPE>
 *
 * @method DPE|null find($id, $lockMode = null, $lockVersion = null)
 * @method DPE|null findOneBy(array $criteria, array $orderBy = null)
 * @method DPE[]    findAll()
 * @method DPE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DPERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DPE::class);
    }

//    /**
//     * @return DPE[] Returns an array of DPE objects
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

//    public function findOneBySomeField($value): ?DPE
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
