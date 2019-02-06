<?php

namespace App\Repository;

use App\Entity\Meters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Meters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Meters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Meters[]    findAll()
 * @method Meters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MetersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Meters::class);
    }

    // /**
    //  * @return Meters[] Returns an array of Meters objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Meters
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
