<?php

namespace KP\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SessionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SessionRepository extends EntityRepository
{
    public function getAll()
    {
        // on appelle la méthode et on passe un alias ex : la premiere lettre de notre entitée
        $sq = $this->createQueryBuilder('e');

        // on requpère tout donc pas de méthode spécifique
        $query = $sq;

        $result = $sq->getQuery()->execute();

        return $result;

    }
}
