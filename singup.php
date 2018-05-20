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
                WHERE correo = '$email' ";
    $result1 = pg_query($link, $query1) or die('Query failed: ' . pg_last_error());


      if ($result1 != $email) { //para ver si no es usuario ya existente
        if ($result != $email ) { // verificar si es doctor para el tipo
          $query2 = "INSERT INTO usuarios
                    VALUES ('$name','$email','p','$pass')";
          $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());

          header("location: index.html");
        }else {
          $query2 = "INSERT INTO usuarios
                    VALUES ('$name','$email','d','$pass')";
          $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());
          header("location: index.html");
        }


      }else {

      }






    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

?>
