<?php

namespace App\Repository;

use App\Entity\TrabajadorTrabajo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrabajadorTrabajo>
 *
 * @method TrabajadorTrabajo|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrabajadorTrabajo|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrabajadorTrabajo[]    findAll()
 * @method TrabajadorTrabajo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrabajadorTrabajoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrabajadorTrabajo::class);
    }

//    /**
//     * @return TrabajadorTrabajo[] Returns an array of TrabajadorTrabajo objects
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

//    public function findOneBySomeField($value): ?TrabajadorTrabajo
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
