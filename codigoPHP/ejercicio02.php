<?php
//Comprobación de si el usuario ha tecleado algo
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Mi dominio"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Se ha cancelado el inicio de sesión';
    die();
} else {
    try {
        //Declaración de tres constantes que almacenan los valores de la conexión.
        require_once '../conf/confDB.php';
        $consultaPorCodigo = <<< sq2
            select * from T01_Usuario where T01_CodUsuario=:codigo;
        sq2;
        $actualizacionNumConexiones = <<< sq3
            update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now() where T01_CodUsuario=:codigo;
        sq3;
        //Crear un objeto PDO pasándole las constantes definidas como parametros.
        $miDB = new PDO(DSN, USER, PASSWORD);
        $queryConsultaPorCodigo = $miDB->prepare($consultaPorCodigo);
        $queryConsultaPorCodigo->bindParam(':codigo', $_SERVER['PHP_AUTH_USER']);
        $queryConsultaPorCodigo->execute();
        $oConsultaPorCodigo = $queryConsultaPorCodigo->fetchObject();
        //Comprobación de contraseña correcta
        if (!$oConsultaPorCodigo || $oConsultaPorCodigo->T01_Password != hash('sha256', ($_SERVER['PHP_AUTH_USER'] . $_SERVER['PHP_AUTH_PW']))) {
            header('WWW-Authenticate: Basic realm="Mi dominio"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Se ha cancelado el inicio de sesión';
            die();
        } else {
            //Actualización del número de conexiones
            $queryActualizacionNumConexiones = $miDB->prepare($actualizacionNumConexiones);
            $queryActualizacionNumConexiones->bindParam(':codigo', $_SERVER['PHP_AUTH_USER']);
            $queryActualizacionNumConexiones->execute();
            echo "Bienvenido $oConsultaPorCodigo->T01_DescUsuario <br/>";
            echo "Esta es la $oConsultaPorCodigo->T01_NumConexiones vez que te conectas <br/>";
            if (($oConsultaPorCodigo->T01_NumConexiones) > 1) {
                echo "Usted se conectó por última vez $oConsultaPorCodigo->T01_FechaHoraUltimaConexion";
            } else {
                
            }
        }
    } catch (PDOException $excepcion) {
        echo 'Error: ' . $excepcion->getMessage() . "<br>";
        echo 'Código de error: ' . $excepcion->getCode() . "<br>";
    } finally {
        unset($miDB);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una autenticación de usuario y contraseña.
        Fecha-última-revisión: 24-11-2022.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ManuelMartínAlonso</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <link rel="icon" type="image/ico" sizes="32x32" href="../webroot/favicon.ico">
    </head>
    <body>
        <a href="../indexProyectoTema5.php"><img style="padding: 0em;" src="../webroot/volver.png" alt="volver" class="volver2"/></a>
        <footer>
            <div><a href="../indexProyectoTema5.php"><img style="padding: 0em 1em;" src="../webroot/logo_propio.png" alt="logo" id="logo"></a></div>
            2022-23 Manuel Martín Alonso. ©Todos los derechos reservados.
            <a href="https://github.com/Manuel0119" target="_blank"><img src="../webroot/github-logo.png" alt="github" id="g"></a>
            <a href="doc/CV - Manuel Martín Alonso.pdf" target="_blank"><img src="../webroot/curriculum-logo.png" alt="curriculum" id="curricu"></a>
        </footer>
    </body>
</html>

