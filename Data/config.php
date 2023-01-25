<?php
    // Votre code ici

    // Si vous voulez inclure une base de donnée
    $db_host="host"; 
    $db_user="username";
    $db_password="password";   
    $db_name="db_name";

    try {
	    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOEXCEPTION $e) {
	    $e->getMessage();
    }
?>
