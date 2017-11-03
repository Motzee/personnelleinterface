<?php

class Database {
    
    protected $db ;
    protected $apiWeatherKey ;
    
    //CONNEXION BDD
    public function __construct() {
        if(!file_exists("admin/admin.ini")) {
            echo "Le fichier de données nécessaires à l'authentification à la base de données est manquant" ;
            exit ;
        }
        
        $ini_array = parse_ini_file("admin/admin.ini");

        $chemin = 'mysql:host='.$ini_array['host'].';dbname='.$ini_array['dbname'] ;
        
        try {
            $bdd = new \PDO($chemin, $ini_array['username'], $ini_array['passwrd']);
            $bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->db = $bdd ;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        
        $this->apiWeatherKey = $ini_array['weatherAPIkey'] ;
    }
    
    
/* METEO */
    //CONSULTING API
    protected function consultAPI(int $referId) {
        $resultJSON = file_get_contents('http://api.openweathermap.org/data/2.5/forecast?id='.$referId.'&APPID='.$this->apiWeatherKey);

        return $resultJSON ;
    }

    //READ
    public function readWeatherFor(string $city) {
        //si existe en bdd
        
        
        //sinon on 
        
    }
    
}
