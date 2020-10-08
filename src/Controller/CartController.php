<?php
namespace App\Controller;

class CartController
{
    public function home()
    {
        echo "<h1>PAGE D'ACCUEIL DU PANIER du CONTROLLER</h1>";
    }
    public function add()
    {
        echo "<h1>PAGE DU PANIER AJOUTE du CONTROLLER</h1>";
    }

    public function remove()
    {
        echo "<h1>PAGE DU PANIER RETIRE DU CONTROLLER</h1>";
    }
}
