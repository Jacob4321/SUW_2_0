<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    /**
     * @return int
     */
    public function countUsers($type)
    {
       $users = $this->getEntityManager()
           ->createQuery(
               'SELECT u FROM AppBundle:User u ORDER BY u.id ASC'
           )
           ->getResult();
        return count($users);
   }
}