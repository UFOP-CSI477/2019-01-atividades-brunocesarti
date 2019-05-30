<?php

//  Configuracção
$database = "academico";

$dbuser  = "sistemaweb";//sistemaweb
$dbpassword = "123456";//123456
$dbhost = "127.0.0.1";

$strConn = "mysql:host = $dbhost;dbname=$database";

//$pdo = new PDO("mysql:host=HOST;dbname=BASE", "USUARIO", "SENHA");

$conection = new PDO($strConn,$dbuser,$dbpassword);

//var_dump($conection);

$estados = $conection->query("SELECT * FROM estados ORDER BY nome ASC");
//var_dump($estados);

// View

// Controller -> invocar view - parâmetros
include 'view_estados.php'; //estados