<?php

    //$dsn = "mysql:host=chrispeloso.com;dbname=chrispf0_SeniorProject2";
    //$userName = "chrispf0_cpeloso";
    //$pword = "W#+TGv)^CGL1";

	$dsn = "mysql:host=localhost;dbname=scheduling1";
    $userName = "root";
    $pword = "";

    
    try{
        $db = new PDO($dsn, $userName, $pword);
    }
    catch(PDOException $e){
        die("Can't connect to the database" . "<br>" . $e);
    }



?>