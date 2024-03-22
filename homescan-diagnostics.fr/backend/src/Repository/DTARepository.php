<?php

namespace App\Repository;

use App\Entity\DTA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DTA>
 *
 * @method DTA|null find($id, $lockMode = null, $lockVersion = null)
 * @method DTA|null findOneBy(array $criteria, array $orderBy = null)
 * @method DTA[]    findAll()
 * @method DTA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DTARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DTA::class);
    }

//    /**
//     * @return DTA[] Returns an array of DTA objects
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

//    public function findOneBySomeField($value): ?DTA
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
