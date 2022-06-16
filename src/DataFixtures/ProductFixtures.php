<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 100; ++$i) {
            $imnum = rand(1, 5);
            $product = new Product();
            $product
                ->setName('Pog ' . $i)
                ->setDescription('L dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua')
                ->setImgpath("pog$imnum.jpg")
                ->setPrice(mt_rand(10, 600));

            $manager->persist($product);
        }

        $manager->flush();
    }
}
