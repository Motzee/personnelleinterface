<?php session_start(); ?>

<!DOCTYPE html>

<?php
require_once('classes/Weather.php') ;
require_once('classes/Database.php') ;
require_once('modeles/bibliotheque.php') ;

$bdd = new Database() ;
/*
echo($bdd->consultAPI(6441813)) ;
*/


$datasJSON = file_get_contents('static/test.json') ;

$datas = json_decode($datasJSON, true);
        
//météo
$referenceCity = 6441813 ;
$nameCity = "Villeurbanne" ;
$temperature = round($datas['list']['0']['main']['temp'] - 273) ;
$imgWeather = "moon" ;

//horoscope
$imgSign = "leo" ;
$nameSign = "Lion" ;
$textSign = "Des retournements de situation positifs surviendront certainement dans votre milieu professionnel. Vous saurez largement tirer votre épingle du jeu, et voir les opportunités futures." ;

require_once('vues/v_index.php') ;