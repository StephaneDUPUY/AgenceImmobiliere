<?php

namespace App\DataFixtures;

use App\Entity\Estate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class EstateFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //Use of Faker for fixtures
        $faker = Factory::create('fr_FR');
        //create 100 fake estates
        for ($i = 0; $i < 100; $i++) {
            $estate = new Estate;
            //Set of properties
            $estate 
                ->setTitle($faker->words(3, true))
                ->setDescription($faker->sentences(3, true))
                ->setSurface($faker->numberBeween(20, 350))
                ->setRooms($faker->numberBetween(2, 10))
                ->setBedrooms($faker->numberBetween(1, 9))
                ->setFloor($faker->numberBetween(0, 15))
                ->setPrice($faker->numberBetween(100000, 1000000))
                ->setHeat($faker->numberBetween(0, count(Estate::HEAT) - 1))
                ->setCity($faker->city)
                ->setAddress($faker->address)
                ->setPostalCode($faker->postcode)
                ->setSold(false);

            $manager->persist($estate);
            
        }

        $manager->flush();
    }
}
