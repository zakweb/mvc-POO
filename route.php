<?php

//Recuperation des parametres GET de l'URL.
$controller = 'App\\Controller\\'.ucfirst($_GET['controller']) . 'Controller';
$action=$_GET['action'];
#Routage AUTOMATIQUE de notre app
//$obj = new $controller(); // DefaultController, UserController, ...
//$obj->$action(); // home,category,register...

call_user_func_array([new $controller, $action],[]);

//if ($controller == 'default' && $action == 'home');
//{
////    echo "<h1>PAGE D'ACCUEIL</h1>";
//    $defaultCrtl->home();
//}
//
//
//if ($controller == 'default' && $action == 'category');
//{
////    echo "<h1>PAGE CATEGORIE</h1>";
//    $defaultCrtl->category();
//}
//
//if ($controller == 'default' && $action == 'article');
//{
////    echo "<h1>PAGE ARTICLE</h1>";
//    $defaultCrtl->article();
//}
//
//if ($controller == 'user' && $action == 'register');
//{
////    echo "<h1>PAGE D'INSCRIPTION</h1>";
//    $UserCrtl->register();
//}
//
//if ($controller == 'user' && $action == 'login');
//{
////    echo "<h1>PAGE DE CONNEXION</h1>";
//    $UserCrtl->login();
//}
//if ($controller == 'cart' && $action == 'home');
//{
////    echo "<h1>PAGE PANIER ACCUEIL</h1>";
//    $CartCrtl->home();
//}
//if ($controller == 'cart' && $action == 'add');
//{
////    echo "<h1>PAGE DU PRODUIT AJOUTE</h1>";
//    $CartCrtl->add();
//}
//if ($controller == 'cart' && $action == 'remove');
//{
////    echo "<h1>PAGE DU PRODUIT RETIRE</h1>";
//    $CartCrtl->remove();
//}

