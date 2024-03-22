<?php

namespace App\Repository;

use App\Entity\DTAT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DTAT>
 *
 * @method DTAT|null find($id, $lockMode = null, $lockVersion = null)
 * @method DTAT|null findOneBy(array $criteria, array $orderBy = null)
 * @method DTAT[]    findAll()
 * @method DTAT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DTATRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DTAT::class);
    }

//    /**
//     * @return DTAT[] Returns an array of DTAT objects
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

//    public function findOneBySomeField($value): ?DTAT
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
