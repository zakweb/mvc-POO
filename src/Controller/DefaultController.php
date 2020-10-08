<?php
namespace App\Controller;

use App\Models\Categorie;

class DefaultController
{
    /**
     * Ces fonctions sont appellées ACTION
     * Page d'accueil du site
     */
    public function home()
    {
        $categorieModel = new Categorie();
        $categories =$categorieModel->getCategories();
        print_r($categories);
        echo "<h1>PAGE D'ACCUEIL du CONTROLLER</h1>";
}


/**
 * Page de categorie du site
 */

    public function category()
    {
        echo "<h1>PAGE De la CATEGORIE du CONTROLLER</h1>";
    }


/**
 * Page d'article du site
 */

    public function article()
    {
        echo "<h1>PAGE DE l'ARTICLE DU CONTROLLER</h1>";
    }
}