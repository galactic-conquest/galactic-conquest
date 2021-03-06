<?php

declare(strict_types=1);

namespace GC\Galaxy\Model;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

final class GalaxyRepository extends EntityRepository
{
    /**
     * @param int $galaxyId
     *
     * @return \GC\Galaxy\Model\Galaxy|null
     */
	public function findById(int $galaxyId): ?Galaxy
    {
        return $this->createQueryBuilder('galaxy')
		    ->where('galaxy.galaxyId = :galaxyId')
            ->setParameter(':galaxyId', $galaxyId)
            ->getQuery()
            ->getOneOrNullResult();
	}

    /**
     * @param int $number
     * @param int $universeId
     *
     * @return \GC\Galaxy\Model\Galaxy|null
     */
    public function findByNumber(int $number, int $universeId): ?Galaxy
    {
        return $this->createQueryBuilder('galaxy')
            ->where('galaxy.number = :number')
            ->andWhere('galaxy.universe = :universeId')
            ->setParameter(':number', $number)
            ->setParameter(':universeId', $universeId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param string $password
     *
     * @return \GC\Galaxy\Model\Galaxy|null
     */
    public function findByPassword(string $password): ?Galaxy
    {
        return $this->createQueryBuilder('galaxy')
            ->where('galaxy.password = :password')
            ->setParameter(':password', $password)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param \GC\Galaxy\Model\Galaxy $galaxy
     *
     * @return \GC\Galaxy\Model\Galaxy|null
     */
    public function findPreviousGalaxy(Galaxy $galaxy): ?Galaxy
    {
        return $this->createQueryBuilder('galaxy')
            ->where('galaxy.universe = :universeId')
            ->andWhere('galaxy.number < :number')
            ->setParameter(':universeId', $galaxy->getUniverse()->getUniverseId())
            ->setParameter(':number', $galaxy->getNumber())
            ->orderBy('galaxy.number', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param \GC\Galaxy\Model\Galaxy $galaxy
     *
     * @return \GC\Galaxy\Model\Galaxy|null
     */
    public function findNextGalaxy(Galaxy $galaxy): ?Galaxy
    {
        return $this->createQueryBuilder('galaxy')
            ->where('galaxy.universe = :universeId')
            ->andWhere('galaxy.number > :number')
            ->setParameter(':universeId', $galaxy->getUniverse()->getUniverseId())
            ->setParameter(':number', $galaxy->getNumber())
            ->orderBy('galaxy.number', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param int $universeId
     *
     * @return \GC\Galaxy\Model\Galaxy|null
     */
    public function findHighestGalaxyNumber(int $universeId): ?Galaxy
    {
        return $this->createQueryBuilder('galaxy')
            ->where('galaxy.universe = :universeId')
            ->setParameter(':universeId', $universeId)
            ->orderBy('galaxy.number', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param int $universeId
     *
     * @return \GC\Galaxy\Model\Galaxy|null
     */
    public function findLowestGalaxyNumber(int $universeId): ?Galaxy
    {
        return $this->createQueryBuilder('galaxy')
            ->where('galaxy.universe = :universeId')
            ->setParameter(':universeId', $universeId)
            ->orderBy('galaxy.number', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param int $universeId
     * @param int $start
     * @param int $limit
     *
     * @return \Doctrine\ORM\Tools\Pagination\Paginator|\GC\Galaxy\Model\Galaxy[]
     */
    public function findAndSortByRanking(int $universeId, int $start = 0, int $limit = 50): Paginator
    {
        $query = $this->createQueryBuilder('galaxy')
            ->where('galaxy.universe = :universeId')
            ->andWhere('galaxy.rankingPosition IS NOT NULL')
            ->andWhere('galaxy.rankingPosition != 0')
            ->orderBy('galaxy.rankingPosition', 'ASC')
            ->setParameter(':universeId', $universeId)
            ->setFirstResult($start)
            ->setMaxResults($limit)
            ->getQuery();

        return new Paginator($query);
    }
}
