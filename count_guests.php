<?php 
    $host = "e-srv-lamp.univ-lemans.fr";
    $user = "e2102672";
    $database = "e2102672";
    $password = "Mrx452cp";

    //Create connection
    $connection = new mysqli($host,$user,$password,$database);

    if ($connection->connect_error) {
        die("Échec de la connexion : " . $connection->connect_error);
    }

    $sql = "SELECT SUM(`Nombre`) AS 'somme' FROM `birthday-guests` WHERE 1";

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    $somme = $row['somme'];

    echo $somme;

    $connection->close();

?>