<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Hall;

class HallFixture extends Fixture
{
    public const HALL_1 = 'h1';
    public const HALL_2 = 'h2';
    public const HALL_3 = 'h3';
    public const HALL_4 = 'h4';
    public const HALL_5 = 'h5';

    public function load(ObjectManager $manager)
    {
        $h1 = new Hall();
        $h1->setName('Main Hall')
            ->setCapacity(300)
            ->setAvailable(true);
        $manager->persist($h1);

        $h2 = new Hall();
        $h2->setName('Main Hall')
            ->setCapacity(850)
            ->setAvailable(true);
        $manager->persist($h2);

        $h3 = new Hall();
        $h3->setName('Main Hall')
            ->setCapacity(850)
            ->setAvailable(true);
        $manager->persist($h3);

        $h4 = new Hall();
        $h4->setName('Main Hall')
            ->setCapacity(2000)
            ->setAvailable(true);
        $manager->persist($h4);

        $h5 = new Hall();
        $h5->setName('Blue Hall')
            ->setCapacity(900)
            ->setAvailable(false);
        $manager->persist($h5);

        $manager->flush();

        $this->addReference(self::HALL_1, $h1);
        $this->addReference(self::HALL_2, $h2);
        $this->addReference(self::HALL_3, $h3);
        $this->addReference(self::HALL_4, $h4);
        $this->addReference(self::HALL_5, $h5);
    }
}
