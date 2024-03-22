<?php

namespace App\Repository;

use App\Entity\InterventionSectors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InterventionSectors>
 *
 * @method InterventionSectors|null find($id, $lockMode = null, $lockVersion = null)
 * @method InterventionSectors|null findOneBy(array $criteria, array $orderBy = null)
 * @method InterventionSectors[]    findAll()
 * @method InterventionSectors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterventionSectorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InterventionSectors::class);
    }

//    /**
//     * @return InterventionSectors[] Returns an array of InterventionSectors objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InterventionSectors
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
