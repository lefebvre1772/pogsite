<?php

namespace App\Repository;

use App\Entity\Placeholder2s;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Placeholder2s|null find($id, $lockMode = null, $lockVersion = null)
 * @method Placeholder2s|null findOneBy(array $criteria, array $orderBy = null)
 * @method Placeholder2s[]    findAll()
 * @method Placeholder2s[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Placeholder2sRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Placeholder2s::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Placeholder2s $entity, bool $flush = true): void
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
    public function remove(Placeholder2s $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Placeholder2s[] Returns an array of Placeholder2s objects
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
    public function findOneBySomeField($value): ?Placeholder2s
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
