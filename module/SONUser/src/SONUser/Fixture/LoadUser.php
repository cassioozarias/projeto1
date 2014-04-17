<?php

namespace SONUser\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use SONUser\Entity\User;


class LoadUser extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setNome("Hugo Marques")
             ->setEmail("marques@gmail.com")
             ->setPassword(1212)
             ->setActive(true);
        
        $manager->persist($user);
        $this->addReference('user1',$user);

        
        $user2 = new User();
        $user2->setNome("Admin da Silva")
              ->setEmail("wesleywillians-admin@gmail.com")
              ->setPassword(123456)
              ->setActive(true);
        
        $manager->persist($user2);
        $this->addReference('user2',$user2);
        
        $manager->flush();  
    }

    public function getOrder() {
        return 1;
    }
}