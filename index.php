<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arcadia_zoo";

try{
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection réeussie";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>