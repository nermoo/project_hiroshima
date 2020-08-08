<?php
    $pdo=new PDO('mysql:host=localhost;port=3306;dbname=chernobyl',"nermo","kolitha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
<!-- 
$conn=new mysqli('localhost','root','','chernobyl'); -->