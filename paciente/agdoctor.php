
    <?php
    $user= "postgres";
    $password = "root";
    $dbname = "pacidoc";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------

    $name = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $especialidad = $_GET['especialidad'];
    $telefono = $_GET['telefono'];
    $direccion = $_GET['direccion'];
    $colegiado = $_GET['colegiado'];
    $correo = $_GET['correo'];
    session_start();
    $scorreo=$_SESSION['correop'];
    $nombre= $name . " " . $apellido;


    $query1 = "INSERT INTO doctores VALUES ('$correo','$nombre','$direccion','$telefono','$especialidad','$colegiado')";
    $result1 = pg_query($link, $query1) or die('Query failed: ' . pg_last_error());

    $query2 = "INSERT INTO pacdoc VALUES ('$correo','$scorreo')";
    $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());


    header("location: /medpa/paciente/doctores.php");



    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

     ?>