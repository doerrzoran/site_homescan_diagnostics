<?php

namespace App\Repository;

use App\Entity\DAAD;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DAAD>
 *
 * @method DAAD|null find($id, $lockMode = null, $lockVersion = null)
 * @method DAAD|null findOneBy(array $criteria, array $orderBy = null)
 * @method DAAD[]    findAll()
 * @method DAAD[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DAADRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DAAD::class);
    }

//    /**
//     * @return DAAD[] Returns an array of DAAD objects
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

//    public function findOneBySomeField($value): ?DAAD
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
