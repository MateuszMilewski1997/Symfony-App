<?php

namespace App\Repository;

use App\Entity\Photos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Photos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Photos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Photos[]    findAll()
 * @method Photos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Photos::class);
    }

    // /**
    //  * @return Photos[] Returns an array of Photos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Photos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findPhotoByPostId($id): ?Photos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.post = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}
