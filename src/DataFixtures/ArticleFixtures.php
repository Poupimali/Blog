<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Faker;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends Fixture implements DependentFixtureInterface

{
    public function load(ObjectManager $manager) //methode appellée lors du chargement des Fixtures
    {

        $faker  =  Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $article = new Article();
            $article->setTitle(mb_strtolower($faker->sentence()));
            $article->setContent($faker->text());
            $manager->persist($article);
            $article->setCategory($this->getReference('categorie_0'));
            // categorie_0 fait reference à la premiere categorie générée.
            $manager->persist($article);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }
}
