<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $muestraform="S";
        $nombre="";
        $apellidos="";
        if (isset($_REQUEST["oculto"])) {
            $nombre=$_REQUEST["nombre"];
            $apellidos=$_REQUEST["apellidos"];
            if (empty($nombre)) {
                echo "Error: Ha dejado el nombre en blanco";                
            } elseif ($apellidos == "") {
                echo "Error: Ha dejado el apellido en blanco";
            } else {
                echo "Los valores enviados son:<br>";
                echo "Nombre: ".$nombre;
                echo "Apellidos: ".$apellidos;
                $muestraform ="";
            }
        }
        if ($muestraform == "S") {
            echo "<br>";
            echo '<form method="POST" name="personal"><br>';
            echo 'Nombre: <input name="nombre" type="text" value="'.$nombre.'"><br>';
            echo 'Apellidos: <input name="apellidos" type="text" value="'.$apellidos.'"><br>';
            echo '<button type="submit" name="envia">Enviar</button><br>';
            echo '<input type="hidden" name="oculto">';
            echo "<br></form>";
        }
        
        ?>
    </body>
</html>
