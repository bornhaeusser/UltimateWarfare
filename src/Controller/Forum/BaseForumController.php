<?php

namespace FrankProjects\UltimateWarfare\Controller\Forum;

use FrankProjects\UltimateWarfare\Controller\BaseController;
use FrankProjects\UltimateWarfare\Entity\User;

class BaseForumController extends BaseController
{
    /**
     * Get User
     *
     * @return User|null
     */
    public function getGameUser()
    {
        /** @var User $user */
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof User) {
            return null;
        }

        return $user;
    }
}
