<?php 

include('identifiants.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

Class Connexion { 
    
    const HOST = DB_HOST;
    const DBNA = DB_NAME;
    const USER = DB_USER;
    const PASW = DB_PWD; 
 
 protected $dbh;
 
  function conect(){
     
   return $dbh = new PDO('mysql:host='.self::HOST.'; dbname='.self::DBNA,self::USER,self::PASW);
     }
     
   }