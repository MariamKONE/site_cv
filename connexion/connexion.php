<?php
$hote='localhost'; // Le chemin vers le serveur
$bdd='site_cv';//Le nom de la base de données
$utilisateur='root';// Le nom d'utlisateur pour se connecter
$passe='';//mot de de l'"utilisateur
//$passe='root'; //mot de passe mac en local

$pdoCV= new PDO('mysql:host='.$hote.';dbname='.$bdd, $utilisateur, $passe);//Cette ligne sert à se connecter à la base de donnée
//$pdoCV est le nom de la variable de connexion qui sert partout ou l'on doit se servir de cette connexion
$pdoCV->exec("SET NAMES utf8");
 ?>
