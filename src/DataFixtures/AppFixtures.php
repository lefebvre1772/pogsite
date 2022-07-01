<?php

namespace App\DataFixtures;

use App\Entity\Pogs;
use App\Entity\User;
use App\Entity\Article;
use App\Entity\Vintages;
use App\Entity\Collectors;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 1; $i <= 150; $i++) {
            $pog = new Pogs();
            $pog->setName("Pog $i")
                ->setDescription("Ceci est le pog numéro $i.")
                ->setImgpath("pog$i.jpg")
                ->setPrice("5000");

            $manager->persist($pog);
        }

        for ($i = 1; $i <= 150; $i++) {
            $collector = new Collectors();
            $collector->setName("Collector $i")
                ->setDescription("Ceci est le pog collector numéro $i.")
                ->setImgpath("collector$i.jpg")
                ->setPrice("5000");

            $manager->persist($collector);
        }

        for ($i = 1; $i <= 150; $i++) {
            $vintage = new Vintages();
            $vintage->setName("Vintage $i")
                ->setDescription("Ceci est le pog vintage numéro $i.")
                ->setImgpath("vintage$i.jpg")
                ->setPrice("5000");

            $manager->persist($vintage);
        }

        for ($i = 1; $i <= 150; $i++) {
            $article = new Article();
            $article->setTitle("Article n° $i")
                ->setContent("Ceci est le pog vintage numéro $i.")
                ->setImage("vintage$i.jpg");
            $manager->persist($article);
        }
        $manager->flush();
    }
}
