<?php


namespace App\Service;


class Slugify
{
    public function generate(string $input) : string
    {
        // Remplace les accents
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $input);

        // mettre toutes les lettres en minuscules tout en remplaçant tous caractères autres que les lettres du pattern par rien
        $slug = mb_strtolower(preg_replace( '/[^a-zA-Z0-9\-\s]/', '', $slug ));

        //remplacer les espaces par des _ -> trim supprime les espaces avant et après
        $slug = str_replace(' ','-',trim($slug));

        // enlever les -- successifs pour n'en laisser qu'un
        $slug = preg_replace('/([-])\\1+/', '$1', $slug);

        return $slug;
    }
}