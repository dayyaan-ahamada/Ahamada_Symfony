<?php

namespace App\DataFixtures;

use App\Entity\ConcertHall;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ConcertHallFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ch1 = new ConcertHall();
        $ch1->setName('Antirouille')
            ->setTotalCapacity(300)
            ->setPresentation('Cette salle de concerts et discothèque possède une vaste salle et diffuse
             du rock, du reggae, de l’électro…')
            ->setCity('Montpellier')
            ->addHall($this->getReference(HallFixture::HALL_1));

        $manager->persist($ch1);

        $ch2 = new ConcertHall();
        $ch2->setName('Rockstore')
            ->setTotalCapacity(850)
            ->setPresentation('Concerts de groupes locaux et internationaux, hommages et sets de
             DJ dans une salle de rock réputée.')
            ->setCity('Montpellier')
            ->addHall($this->getReference(HallFixture::HALL_2));

        $manager->persist($ch2);

        $ch3 = new ConcertHall();
        $ch3->setName('Le Moulin Rouge')
            ->setTotalCapacity(850)
            ->setPresentation('Cabaret de revue')
            ->setCity('Paris')
            ->addHall($this->getReference(HallFixture::HALL_3));

        $manager->persist($ch3);

        $ch4 = new ConcertHall();
        $ch4->setName('Olympia')
            ->setTotalCapacity(2000)
            ->setPresentation('L’Olympia est une salle de spectacle. C\'est le plus ancien music-hall de
             Paris encore en activité')
            ->setCity('Paris')
            ->addHall($this->getReference(HallFixture::HALL_4))
            ->addHall($this->getReference(HallFixture::HALL_5));

        $manager->persist($ch4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            HallFixture::class,
        );
    }
}
