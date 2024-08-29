<?php

define('IMAGES_CAROUSEL', [
    'carousel1' => '../public/images/1.jpg',
    'carousel2' => '../public/images/2.jpg',
    'carousel3' => '../public/images/3.jpg',
]);

/* L'avantage de cette classe Config est de pouvoir redéfinir les variables
ce qui n'est pas possible avec les constantes */

class Config
{
    // Définir les propriétés statiques pour les chemins d'images
    private static $carousel1;
    private static $carousel2;
    private static $carousel3;

    // Définir un tableau public statique avec les chemins d'accès
    public static $imagePaths;

    // Méthode statique pour initialiser les chemins d'images
    public static function initialize()
    {
        self::$carousel1 = './public/images/1.jpg';
        self::$carousel2 = './public/images/2.jpg';
        self::$carousel3 = './public/images/3.jpg';

        self::$imagePaths = [
            'carousel1' => self::$carousel1,
            'carousel2' => self::$carousel2,
            'carousel3' => self::$carousel3
        ];
    }
}

// Initialiser les chemins d'images
Config::initialize();

// Accéder aux chemins d'accès via la classe sans l'instancier
//echo Config::$imagePaths['image1']; // Affiche: ../public/images/image1.png

// Ajouter un nouveau chemin
//Config::$imagePaths['image4'] = '../public/images/image4.bmp';

// Modifier un chemin existant
//Config::$imagePaths['image1'] = '../public/images/image1_updated.png';

// Parcourir les chemins
/*foreach (Config::$imagePaths as $key => $path) {
    echo "$key: $path<br>";
}*/

// Modifier la valeur
//Config::$imagePath = '../public/images/image1_updated.png';

// "Supprimer" en la mettant à null
//Config::$imagePath = null;


define('MY_NAME', 'Aloïs Zweber');

function getImagePath($imageKey)
{
    $images = Config::$imagePaths;

    if (array_key_exists($imageKey, $images)) {
        $path = $images[$imageKey];

        return $path;
    }

    throw new Exception('Image not found.');
}
