<?php
/**
 * Le fichier Public est le point d'entrée UNIQUE des requetes externes de notre app.
 *
 */


/**
 * Le fichier INDEX assure l'utilisation du bon Controller
 */

#APERCU de $_GET
echo'<pre>';print_r($_GET);echo'</pre>';

#Récuperation des GET de l'URL
$controller = $_GET['controller'];
$action= $_GET['action'];

#Chargement AUTOMATIQUE des class
require_once '../autoload.php';


#Chargement AUTOMATIQUE des routes
require_once '../route.php';


//#Autochargement des class
//spl_autoload_register(function($class){
//   echo'chargement de : ' . $class . '<br>';
//   require_once '../src/Controller/' . $class .'.php';
//});

# Chargement des Controllers
//require_once'../src/controller/defaultController.php';
//require_once'../src/controller/UserController.php';
//require_once'../src/controller/CartController.php';

#Creation des objets
//$defaultCrtl= new DefaultController();
//$UserCrtl= new UserController();
//$CartCrtl = new CartController();

////Recuperation des parametres GET de l'URL.
//$controller = UCfirst($_GET['controller']) . 'Controller';
//$action=$_GET['action'];
//#Routage AUTOMATIQUE de notre app
////$obj = new $controller(); // DefaultController, UserController, ...
////$obj->$action(); // home,category,register...
//
//call_user_func_array([new $controller, $action],[]);
//
////if ($controller == 'default' && $action == 'home');
////{
//////    echo "<h1>PAGE D'ACCUEIL</h1>";
////    $defaultCrtl->home();
////}
////
////
////if ($controller == 'default' && $action == 'category');
////{
//////    echo "<h1>PAGE CATEGORIE</h1>";
////    $defaultCrtl->category();
////}
////
////if ($controller == 'default' && $action == 'article');
////{
//////    echo "<h1>PAGE ARTICLE</h1>";
////    $defaultCrtl->article();
////}
////
////if ($controller == 'user' && $action == 'register');
////{
//////    echo "<h1>PAGE D'INSCRIPTION</h1>";
////    $UserCrtl->register();
////}
////
////if ($controller == 'user' && $action == 'login');
////{
//////    echo "<h1>PAGE DE CONNEXION</h1>";
////    $UserCrtl->login();
////}
////if ($controller == 'cart' && $action == 'home');
////{
//////    echo "<h1>PAGE PANIER ACCUEIL</h1>";
////    $CartCrtl->home();
////}
////if ($controller == 'cart' && $action == 'add');
////{
//////    echo "<h1>PAGE DU PRODUIT AJOUTE</h1>";
////    $CartCrtl->add();
////}
////if ($controller == 'cart' && $action == 'remove');
////{
//////    echo "<h1>PAGE DU PRODUIT RETIRE</h1>";
////    $CartCrtl->remove();
////}
