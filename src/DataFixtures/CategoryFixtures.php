<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    private const CATEGORIES = [
        'PHP',
        'Java',
        'Javascript',
        'Ruby',
        'DevOps'
    ];

    public function load(ObjectManager $manager) //methode appellée lors du chargement des Fixtures
    {
        /* on peut rajouter à la volée plein de données avec une boucle for
         *
         * for ($i = 1; $i <= 50; $i++) {
            $category = new Category();
            $category->setName('Nom de catégorie ' . $i);
            $manager->persist($category);
        }
        $manager->flush();*/

        // faire un foreach avec la const definie plus haut
        foreach (self::CATEGORIES as $key => $categoryName){
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('categorie_' . $key, $category);
        }
        $manager->flush();


    }
}
