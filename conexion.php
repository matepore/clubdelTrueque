<?php 

$con = Conectar();


function Conectar (){
    $conexion = null;
    $host = 'localhost';
    $db = 'club_del_trueque';
    $user = 'root';
    $pwd = '';
    try {
        $conexion = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch (PDOException $e) {
        echo '<p>No se puede conectar a la base de datos !!</p>';die("Error");
        exit;
    }
    return $conexion;
}
?>