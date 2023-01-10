<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="2.css">
    <title>Activitat 2</title>


    <script>
        <?php
            function suma_sin_retorno ($a, $b, $c, $d, $e) {
                print ($a + $b + $c + $d + $e);
            }

            function suma_con_retorno($f, $g, $h, $i, $j) {
                $tmp = $f + $g + $h + $i + $j;
                return $tmp;
            }

            function calculo_radio($altura, $radio)
            {
                #variables
                //como el radio se eleva al cuadrado, ya hago la exponencial directamente para no multiplicar dos veces
                $radio = 5;
                $radio_elevado = pow($radio, 2);
                $altura = 10;
                #calculo formula
                $resultado = $radio_elevado * $altura * pi();
                return round($resultado,3);

            }
            define('DEBUG', 1);
            function debug_error_mensaje($error_message) {
                if(constant('DEBUG')) {
                echo "<div class='card-debug'>
                        <p>$error_message</p>
                    </div>";
                }
            }


        ?>
    </script>

</head>
<body>

    <section>
        <h2>A) El resultat de la funció passant com a paràmetres 1, 1, 1 ,1 ,1 es:</h2>
        <p>
            <?php
                suma_sin_retorno(1, 1, 1, 1, 1);
            ?>
        </p>
    </section>

    <section>
        <h2>B) $tmp = El resultat de la funció passant com a paràmetres 2, 5, 1, 8, 10 es:</h2>
        <p>$tmp = 
            <?php
                print(suma_con_retorno(2, 5, 1, 8, 10));
            ?>
        </p>
    </section>

    <section>
        <h2>C) Radi = 5 / Alçada = 10:</h2>
        <p>$volum =
            <?php    
                print(calculo_radio(5,10));
            ?>
        </p>
    </section>

    <section>
        <h2>D) Debug:</h2>
            <?php
                debug_error_mensaje('<b>Debug:</b><br>Misstage de prova  de debug.')
            ?>    
        </div>
    </section>
    
</body>
</html>




    