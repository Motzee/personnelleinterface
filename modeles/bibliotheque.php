<?php
function aujourdhui() {
	$lesJoursFR = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"] ;
	$lesMoisFR = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"] ;
        
	$joursemFR = $lesJoursFR[date('w')] ;
	$moisFR = $lesMoisFR[date('n') - 1] ;

	$aujourdhui = $joursemFR . " " . date('j') . " " . $moisFR . " " . date('Y');
  
	return $aujourdhui ;
}