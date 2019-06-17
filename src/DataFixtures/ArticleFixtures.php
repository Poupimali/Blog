<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Faker;
use App\Service\Slugify;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(Slugify $slugify)
    {
        $this->slug = $slugify;
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }

    public function load(ObjectManager $manager) //methode appellée lors du chargement des Fixtures
    {
        for ($i = 0; $i < 50; $i++) {
            $article = new Article();
            $faker = Faker\Factory::create('fr_FR');
            $article->setTitle(mb_strtolower($faker->sentence()));
            $article->setContent(mb_strtolower($faker->paragraph('3')));
            $article->setSlug($this->slug->generate($article->getTitle()));
            $manager->persist($article);
            $article->setCategory($this->getReference('categorie_' . rand(0,4)));
            // categorie_ . rand fait reference à la premiere categorie générée.
            $manager->flush();
        }
    }

}
