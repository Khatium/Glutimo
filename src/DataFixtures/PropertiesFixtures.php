<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Pictures;
use App\Entity\Properties;

class PropertiesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      for ($i=0; $i < 15; $i++) {
        $property = new Properties();
        $property->setTitle("Titre du bien n°$i")
                 ->setPrix(50000)
                 ->setSurface(50)
                 ->setAdresseLibelle("sente des mousses")
                 ->setAdresseNumero(4)
                 ->setAdresseCp(33000)
                 ->setAdresseVille("Bordeaux")
                 ->setAdressePays("France")
                 ->setNombrePiece(2)
                 ->setNombreParking(1)
                 ->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
                 ->setImagePrincipale("http://placehold.it/350x150")
                 ->setCreatedAt(new \DateTime())
                 ->setOwnerEmail("random@email.com")
                 ->setOwnerPhone("0633936264")
                 ->setOwnerLastname("Blay")
                 ->setOwnerFirstname("Maxime");
        for ($j=0; $j < 3; $j++) {
          $pictures = new Pictures();
          $pictures->setName("Image n°$j")
                   ->setRelatedProperty($property)
                   ->setUrl("http://placehold.it/300x500");
          $manager->persist($pictures);
        }
                 $manager->persist($property);
      }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
