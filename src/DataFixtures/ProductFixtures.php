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
                ->setDescription('Ceci est le pog n° ' . $i)
                ->setCategory(mt_rand(1, 3))
                ->setImgpath('pog' . mt_rand(1, 5) . '.jpg')
                ->setPrice(mt_rand(10, 600));

            $manager->persist($product);
        }

        $manager->flush();
    }
}
