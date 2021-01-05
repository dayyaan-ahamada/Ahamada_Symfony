<?php

namespace App\DataFixtures;

use App\Entity\Band;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BandFixture extends Fixture implements DependentFixtureInterface
{
    public const BAND_1 = 'b1';
    public const BAND_2 = 'b2';

    public function load(ObjectManager $manager)
    {
        $b1 = new Band();
        $b1->setName('JAB')
            ->setStyle('Jazz')
            ->setCreationYear(new \DateTime(2017))
            ->setLastAlbumName('PLÉTHORE')
            ->setPicture('flowerHitmanKing.jpg')
            ->addMember($this->getReference(MemberFixture::MEMBER_ONE))
            ->addMember($this->getReference(MemberFixture::MEMBER_TWO));

        $manager->persist($b1);

        $b2 = new Band();
        $b2->setName('Souru Kingu')
            ->setStyle('Soul')
            ->setCreationYear(new \DateTime(2019))
            ->setLastAlbumName('QBJPM')
            ->setPicture('soulsoulsoul.jpg')
            ->addMember($this->getReference(MemberFixture::MEMBER_THREE))
            ->addMember($this->getReference(MemberFixture::MEMBER_FOUR))
            ->addMember($this->getReference(MemberFixture::MEMBER_FIVE))
            ->addMember($this->getReference(MemberFixture::MEMBER_SIX));

        $manager->persist($b2);

        $manager->flush();

        $this->addReference(self::BAND_1, $b1);
        $this->addReference(self::BAND_2, $b2);
    }
    public function getDependencies()
    {
        return array(
            MemberFixture::class,
        );
    }
}
