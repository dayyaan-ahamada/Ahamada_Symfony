<?php

namespace App\DataFixtures;

use App\Entity\Concert;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ConcertFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

//        $c1 = new Concert();
//        $c1->setDate(\DateTime::createFromFormat('d/m/Y', '05/07/2019'))
//            ->setTourName('OISEAU')
//            ->setHall($this->getReference(HallFixture::HALL_1))
//            ->addBand($this->getReference(BandFixture::BAND_1));
//        $manager->persist($c1);

        $c2 = new Concert();
        $c2->setDate(\DateTime::createFromFormat('d/m/Y', '05/03/2022'))
            ->setTourName('YË')
            ->setHall($this->getReference(HallFixture::HALL_1))
            ->addBand($this->getReference(BandFixture::BAND_1));
        $manager->persist($c2);

        $c3 = new Concert();
        $c3->setDate(\DateTime::createFromFormat('d/m/Y', '15/11/2021'))
            ->setTourName('Ëpisode 0')
            ->setHall($this->getReference(HallFixture::HALL_2))
            ->addBand($this->getReference(BandFixture::BAND_1));
        $manager->persist($c3);

        $c4 = new Concert();
        $c4->setDate(\DateTime::createFromFormat('d/m/Y', '28/02/2019'))
            ->setTourName('NO FUTURE')
            ->setHall($this->getReference(HallFixture::HALL_3))
            ->addBand($this->getReference(BandFixture::BAND_2));
        $manager->persist($c4);

        $c5 = new Concert();
        $c5->setDate(\DateTime::createFromFormat('d/m/Y', '15/11/2021'))
            ->setTourName('QBJPNaitre')
            ->setHall($this->getReference(HallFixture::HALL_4))
            ->addBand($this->getReference(BandFixture::BAND_2));
        $manager->persist($c5);

        $manager->flush();
    }
    public function getDependencies()
    {
        return array(
            HallFixture::class,
            BandFixture::class,
        );
    }
}
