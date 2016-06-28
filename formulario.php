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
            } else {
                echo "El valor enviado es:<br>";
                echo "Nombre: ".$nombre;
                $muestraform ="";
            }
        }
        if ($muestraform == "S") {
            echo "<br>";
            echo '<form method="POST" name="personal"><br>';
            echo 'Nombre: <input name="nombre" type="text" value="'.$nombre.'"><br>';
            echo '<button type="submit" name="envia">Enviar</button><br>';
            echo '<input type="hidden" name="oculto">';
            echo "<br></form>";
        }
        
        ?>
    </body>
</html>
