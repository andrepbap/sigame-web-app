<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

//http://symfony.com/doc/current/book/doctrine.html#custom-repository-classes

class UserRepository extends EntityRepository {

    public function findUserByLogin($email, $password) {
        return $this->getEntityManager()
                        ->createQuery('
                        SELECT u
                        FROM AppBundle:User u
                        WHERE u.email = :email
                        AND u.password = :password
                    ')
                        ->setParameter('email', $email)
                        ->setParameter('password', $password)
                        ->getResult();
    }

}
