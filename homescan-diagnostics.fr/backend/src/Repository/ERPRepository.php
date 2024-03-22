<?php

namespace App\Repository;

use App\Entity\ERP;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ERP>
 *
 * @method ERP|null find($id, $lockMode = null, $lockVersion = null)
 * @method ERP|null findOneBy(array $criteria, array $orderBy = null)
 * @method ERP[]    findAll()
 * @method ERP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ERPRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ERP::class);
    }

//    /**
//     * @return ERP[] Returns an array of ERP objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ERP
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
