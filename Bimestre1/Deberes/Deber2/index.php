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
        /**/
        $numero = 10;
        impresionColores($numero);
                
        function impresionColores($numero) {//imprime tabla y filas
            echo "<table border='1'><caption><h3><font color=\"red\"> Números Primos</font></h3></caption>";
            for ($i = 0; $i <= $numero; $i++) {
                if ($i % 10 == 0) {//nueva fila
                    echo "<tr>";
                }
                $a = verificarNumeroPrimo($i);
                impresion($i, $a);
            }
            echo"</table>";
        }

        function verificarNumeroPrimo($numero) {//funcion para verificar si es numero primo o no
            $contador = 0;
            for ($i = 1; $i < $numero + 1; $i++) {
                if ($numero % $i == 0) {

                    $contador++;
                }
            }
            return $contador;
        }

        function impresion($numero, $contador) {//imprime columnas dependiendo si es primoo no
            if ($contador == 2) {
                //echo 'es numero primo';
                echo "<td><font color=\"red\">$numero</font></td>";
            } else {
                //echo 'no es primo';
                echo "<td>$numero</td>";
            }
        }
        ?>
    </body>
</html>
