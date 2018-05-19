<?php
    $name = $_POST['namesurname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $user= "postgres";
    $password = "root";
    $dbname = "pacidoc";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------
    $query = "SELECT correod
                FROM doctores
                WHERE correod = '$email' ";
    $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error());

    $query1 = "SELECT correo
                FROM usuarios
                WHERE correod = '$email' ";
    $result1 = pg_query($link, $query1) or die('Query failed: ' . pg_last_error());

    if ($result != $email ) {
      if ($result1 != $email) {
        // code...
      }

    }




    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

?>
