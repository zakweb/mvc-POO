<?php
//Convention PHP pour arborescence
//Avant configuration
namespace App\Models;

class Categorie
{
    public function getCategories()
    {
        return [
            'Politique', 'Economie', 'Culture'
        ];

    }
}