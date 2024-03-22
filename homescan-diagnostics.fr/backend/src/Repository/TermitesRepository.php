<?php

namespace App\Repository;

use App\Entity\Termites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Termites>
 *
 * @method Termites|null find($id, $lockMode = null, $lockVersion = null)
 * @method Termites|null findOneBy(array $criteria, array $orderBy = null)
 * @method Termites[]    findAll()
 * @method Termites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TermitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Termites::class);
    }

//    /**
//     * @return Termites[] Returns an array of Termites objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Termites
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
