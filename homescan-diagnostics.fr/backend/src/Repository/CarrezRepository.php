<?php

namespace App\Repository;

use App\Entity\Carrez;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Carrez>
 *
 * @method Carrez|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carrez|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carrez[]    findAll()
 * @method Carrez[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarrezRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carrez::class);
    }

//    /**
//     * @return Carrez[] Returns an array of Carrez objects
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

//    public function findOneBySomeField($value): ?Carrez
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
