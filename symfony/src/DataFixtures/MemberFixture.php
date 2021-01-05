<?php

namespace App\DataFixtures;

use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MemberFixture extends Fixture
{
    public const MEMBER_ONE = 'm1';
    public const MEMBER_TWO = 'm2';
    public const MEMBER_THREE = 'm3';
    public const MEMBER_FOUR = 'm4';
    public const MEMBER_FIVE = 'm5';
    public const MEMBER_SIX = 'm6';

    public function load(ObjectManager $manager)
    {
        $m1 = new Member();
        $m1->setName('Paul')
            ->setFirstName('Aire')
            ->setJob('Chanteur')
            ->setBirthDate(\DateTime::createFromFormat('d/m/Y', '05/03/1994'))
            ->setPicture('paulaire.jpg');
        $manager->persist($m1);

        $m2 = new Member();
        $m2->setName('Bob')
            ->setFirstName('Aire')
            ->setJob('Saxophoniste')
            ->setBirthDate(\DateTime::createFromFormat('d/m/Y', '21/11/1992'))
            ->setPicture('bobaire.jpg');
        $manager->persist($m2);

        $m3 = new Member();
        $m3->setName('Hoffely')
            ->setFirstName('Horion')
            ->setJob('Chanteuse')
            ->setBirthDate(\DateTime::createFromFormat('d/m/Y', '15/05/1998'))
            ->setPicture('hoffely.jpg');
        $manager->persist($m3);

        $m4 = new Member();
        $m4->setName('Nome')
            ->setFirstName('Irene')
            ->setJob('Pianiste')
            ->setBirthDate(\DateTime::createFromFormat('d/m/Y', '07/07/1997'))
            ->setPicture('nome.jpg');
        $manager->persist($m4);

        $m5 = new Member();
        $m5->setName('Tom')
            ->setFirstName('Moah')
            ->setJob('Batteur')
            ->setBirthDate(\DateTime::createFromFormat('d/m/Y', '21/08/1999'))
            ->setPicture('tom.jpg');
        $manager->persist($m5);

        $m6 = new Member();
        $m6->setName('Mel')
            ->setFirstName('Ustucru')
            ->setJob('Bassiste')
            ->setBirthDate(\DateTime::createFromFormat('d/m/Y', '30/11/1997'))
            ->setPicture('melustucru.jpg');
        $manager->persist($m6);

        $manager->flush();

        $this->addReference(self::MEMBER_ONE, $m1);
        $this->addReference(self::MEMBER_TWO, $m2);
        $this->addReference(self::MEMBER_THREE, $m3);
        $this->addReference(self::MEMBER_FOUR, $m4);
        $this->addReference(self::MEMBER_FIVE, $m5);
        $this->addReference(self::MEMBER_SIX, $m6);
    }
}
