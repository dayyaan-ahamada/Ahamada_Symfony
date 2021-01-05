<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $u1 = new User();
        $u1->setFirstname('Paul')
            ->setLastname('Aire')
            ->setEmail('oui@gmail.com')
            ->setPassword('oui');
        $manager->persist($u1);

        $u2 = new User();
        $u2->setFirstname('admin')
            ->setLastname('admin')
            ->setEmail('admin@gmail.com')
            ->setPassword('admin')
            ->setRoles([User::ROLE_ADMIN]);
        $manager->persist($u2);

        $manager->flush();
    }
}
