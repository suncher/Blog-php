<?php
    try { 
        $objPdo = new PDO ('mysql:host=devbdd.iutmetz.univ-lorraine.fr;port=3306:charset=utf8; dbname=krebs47u_php' , 'id' , 'password' );  
        
    }  catch( Exception $exception ) {  
        die($exception->getMessage()); 
    }
?>
