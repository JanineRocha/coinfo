<?php

session_start();

$localhost = "localhost";
$user = "coinfo";
$passw = "coinfo@20202";
$banco = "fsspe_coinfo";

global $pdo;

//Modelo avançado com pdo

try{
    
// Orientada a Objetos com pdo 

    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "ERRO: ".$e->getMessage();
    exit;
}
?>