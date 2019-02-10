<?php
/**
 * Created by PhpStorm.
 * User: jakub
 * Date: 2019-02-10
 * Time: 14:58
 */

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