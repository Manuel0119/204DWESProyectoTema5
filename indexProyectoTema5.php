<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ManuelMartínAlonso</title>
        <link rel="stylesheet" href="webroot/css/estilos.css">
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/favicon.ico">
        <style>
            .container{
                margin: 2em 2em;
            }
            .volver{
                margin-top: 0px;
            }
            .container table:nth-of-type(1) td {
                padding: 4px;
            }
        </style>
    </head>
    <body>
        <div class="encabezado">
            <h1 class="cabecera">TEMA 5: DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO</h1>
        </div>
        <div class="container">
            <table>
                <tr>
                    <th colspan="4" style="width: 50%;">Scripts</th>
                </tr>
                <tr>
                    <th>Intrucciones</th>
                    <th>SQLEntornoDesarrollo</th>
                    <th>SQLExplotación</th>
                    <th>SQLCasa</th>
                </tr>
                <tr style="text-align: center;"> 
                    <td style="font-size: 1.2em">CreaBDepartamentos</td>
                    <td style="text-align: center"><a href="mostrarcodigo/mostrarCreaDB204DWESProyectoTema5.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestrarestaurarDB.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/mostrarCreaDB204DWESProyectoTema5.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                </tr>
                <tr style="text-align: center;">
                    <td style="font-size: 1.2em">CargaInicialBDepartamentos</td>
                    <td style="text-align: center"><a href="mostrarcodigo/mostrarCargaInicialDB204DWESProyectoTema5.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestracargaInicialDB.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/mostrarCargaInicialDB204DWESProyectoTema5.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                </tr>
                <tr style="text-align: center;">
                    <td style="font-size: 1.2em">BorraBDepartamentos</td>
                    <td style="text-align: center"><a href="mostrarcodigo/mostrarBorraDB204DWESProyectoTema5.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestraborrarDB.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/mostrarBorraDB204DWESProyectoTema5.php"><img src="webroot/mostrarsql.png" alt="ejecutar" class="imagen2"/></a></td>
                </tr>
                <tr>
                    <th colspan="4" >Configuraciones y libreria</th>
                </tr>
                <tr style="text-align: center;">
                    <td style="font-size: 1.2em">Configuración Conexión</td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestraconfDBPDODesarrollo.php"><img src="webroot/mostrarcodigo.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestraconfDBPDOExplotacion.php"><img src="webroot/mostrarcodigo.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestraconfDBPDOCasa.php"><img src="webroot/mostrarcodigo.png" alt="ejecutar" class="imagen2"/></a></td>
                </tr>
                <tr style="text-align: center;">
                    <td style="font-size: 1.2em">LibreriaValidacion</td>
                    <td colspan="3" style="text-align: center"><a href="mostrarcodigo/muestraLibreriaValidacion.php"><img src="webroot/mostrarcodigo.png" alt="ejecutar" class="imagen2"/></a></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th style="width: 70%;">Enunciado</th>
                    <th>Ejecutar</th>
                    <th>Mostrar</th>
                </tr>                
                <tr>
                    <td>0. Mostrar el contenido de las variables superglobales y phpinfo().</td>
                    <td style="text-align: center"><a href="codigoPHP/ejercicio00.php"><img src="webroot/ejecutar.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestraEjercicio00.php"><img src="webroot/mostrarcodigo.png" alt="ejecutar" class="imagen2"/></a></td>
                </tr>
                <tr>
                    <td>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</td>
                    <td style="text-align: center"><a href="codigoPHP/ejercicio01.php"><img src="webroot/ejecutar.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestraEjercicio01.php"><img src="webroot/mostrarcodigo.png" alt="ejecutar" class="imagen2"/></a></td>
                </tr>
                <tr>
                    <td>2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos.</td>
                    <td style="text-align: center"><a href="codigoPHP/ejercicio02.php"><img src="webroot/ejecutar.png" alt="ejecutar" class="imagen2"/></a></td>
                    <td style="text-align: center"><a href="mostrarcodigo/muestraEjercicio02.php"><img src="webroot/mostrarcodigo.png" alt="ejecutar" class="imagen2"/></a></td>
                </tr>
            </table>
            <a href="../204DWESProyectoDWES/indexProyectoDWES.php"><img src="webroot/volver.png" alt="volver" class="volver"/></a>
        </div>
        <footer>
            <div><a href="../index.html"><img src="webroot/logo_propio.png" alt="logo" id="logo"></a></div>
            2022-23 Manuel Martín Alonso. ©Todos los derechos reservados.
            <a href="https://github.com/Manuel0119" target="_blank"><img src="webroot/github-logo.png" alt="github" id="g"></a>
            <a href="doc/CV - Manuel Martín Alonso.pdf" target="_blank"><img src="webroot/curriculum-logo.png" alt="curriculum" id="curricu"></a>
        </footer>
    </body>
</html>
