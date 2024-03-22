<?php

namespace App\Repository;

use App\Entity\Asbestos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Asbestos>
 *
 * @method Asbestos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asbestos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asbestos[]    findAll()
 * @method Asbestos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsbestosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Asbestos::class);
    }

//    /**
//     * @return Asbestos[] Returns an array of Asbestos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Asbestos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
