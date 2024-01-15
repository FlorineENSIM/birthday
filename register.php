<?php 
    $host = "e-srv-lamp.univ-lemans.fr";
    $user = "e2102672";
    $database = "e2102672";
    $password = "Mrx452cp";

    //Create connection
    $connection = new mysqli($host,$user,$password,$database);

    if ($connection -> connect_error) {
        echo("error");
    }
    else {
        echo("no error");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom = $_POST['nom'];
        $nombre = $_POST['nombre'];

        $sql = "INSERT INTO `birthday-guests`(nom, nombre) VALUES ('$nom','$nombre')";

        if ($connection->query($sql) === TRUE) {
            echo("Formulaire envoyé");
        } else {
            echo("Error : ".$sql."<br>".$connection->error);
        }
    }

    $connection->close();

?>