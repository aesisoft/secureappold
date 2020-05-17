<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $client = new Client();
        $client->setSociete('Jokes Cie');
        $client->setNom('GOLADE');
        $client->setPrenom('Larry');
        $client->setEmail('larry.golade@jokescie.com');           
        $manager->persist($client);
        $manager->flush();

        $manager->flush();
    }
}
