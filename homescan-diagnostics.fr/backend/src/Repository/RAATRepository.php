<?php

namespace App\Repository;

use App\Entity\RAAT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RAAT>
 *
 * @method RAAT|null find($id, $lockMode = null, $lockVersion = null)
 * @method RAAT|null findOneBy(array $criteria, array $orderBy = null)
 * @method RAAT[]    findAll()
 * @method RAAT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RAATRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RAAT::class);
    }

//    /**
//     * @return RAAT[] Returns an array of RAAT objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RAAT
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
