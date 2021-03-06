<?php

namespace App\Repository;

use App\Entity\Placeholder1s;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Placeholder1s|null find($id, $lockMode = null, $lockVersion = null)
 * @method Placeholder1s|null findOneBy(array $criteria, array $orderBy = null)
 * @method Placeholder1s[]    findAll()
 * @method Placeholder1s[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Placeholder1sRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Placeholder1s::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Placeholder1s $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Placeholder1s $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Placeholder1s[] Returns an array of Placeholder1s objects
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
    public function findOneBySomeField($value): ?Placeholder1s
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
