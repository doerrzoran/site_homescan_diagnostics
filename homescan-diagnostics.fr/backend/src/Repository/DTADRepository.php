<?php

namespace App\Repository;

use App\Entity\DTAD;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DTAD>
 *
 * @method DTAD|null find($id, $lockMode = null, $lockVersion = null)
 * @method DTAD|null findOneBy(array $criteria, array $orderBy = null)
 * @method DTAD[]    findAll()
 * @method DTAD[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DTADRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DTAD::class);
    }

//    /**
//     * @return DTAD[] Returns an array of DTAD objects
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

//    public function findOneBySomeField($value): ?DTAD
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
