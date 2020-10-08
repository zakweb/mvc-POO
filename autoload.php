<?php


#Autochargement des class
spl_autoload_register(function($class){
   # echo'chargement de : ' . $class . '<br>';
    #Pour supprimer l'App dans le namespace, pour aller directement SRC/Controller...
    $class=str_replace('App','',$class);

    require_once '../src/'. str_replace('\\',DIRECTORY_SEPARATOR, $class) .'.php';
  });