<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Ejercicio 1. Apartado a
        $A = array("Z1" => array(
                "X1" => array(
                    "Y1" => 2, "Y2" => 4, "Y3" => 6, "Y4" => 8),
                "X2" => array(
                    "Y1" => 10, "Y2" => 12, "Y3" => 14, "Y4" => 16),
                "X3" => array(
                    "Y1" => 18, "Y2" => 20, "Y3" => 22, "Y4" => 24),
                "X4" => array(
                    "Y1" => 26, "Y2" => 28, "Y3" => 30, "Y4" => 32)
            ),
            "Z2" => array(
                "X1" => array(
                    "Y1" => 34, "Y2" => 36, "Y3" => 38, "Y4" => 40),
                "X2" => array(
                    "Y1" => 42, "Y2" => 44, "Y3" => 46, "Y4" => 48),
                "X3" => array(
                    "Y1" => 50, "Y2" => 52, "Y3" => 54, "Y4" => 56),
                "X4" => array(
                    "Y1" => 58, "Y2" => 60, "Y3" => 62, "Y4" => 64)
            ),
            "Z3" => array(
                "X1" => array(
                    "Y1" => 66, "Y2" => 68, "Y3" => 70, "Y4" => 72),
                "X2" => array(
                    "Y1" => 74, "Y2" => 76, "Y3" => 78, "Y4" => 80),
                "X3" => array(
                    "Y1" => 82, "Y2" => 84, "Y3" => 86, "Y4" => 88),
                "X4" => array(
                    "Y1" => 90, "Y2" => 92, "Y3" => 94, "Y4" => 96)
            ),
            "Z4" => array(
                "X1" => array(
                    "Y1" => 98, "Y2" => 100, "Y3" => 102, "Y4" => 104),
                "X2" => array(
                    "Y1" => 106, "Y2" => 108, "Y3" => 110, "Y4" => 112),
                "X3" => array(
                    "Y1" => 114, "Y2" => 116, "Y3" => 118, "Y4" => 120),
                "X4" => array(
                    "Y1" => 122, "Y2" => 124, "Y3" => 126, "Y4" => 128)
            )
        );


//Ejercicio 1. Apartado B
        function MostrarMatrizTridimensional($B) {
            foreach ($B as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    foreach ($value1 as $key2 => $value2) {
                        echo "La matriz de indice1 " . $key1 . ", indice2 " . $key2 . " e indice3 " . $key . " tiene el valor: " . $value2 . "<br>";
                    }
                }
            }
        }

        echo MostrarMatrizTridimensional($A);

        echo "<br>";
        echo "<br>";






//Ejercicio 1. Apartado C
function CrearMatrizTridimensional ($Xn, $Ym, $Zk, $z){
$p = array();
$z1 = 0;
for ($zi=1; $zi < $Zk+1; $zi++){
    for ($x=1; $x<SXn+1; $x++){
        for ($y=1; $y<$Ym+1; $Y++){
            $z1+=$z;
            array_push($p, $szi, $x, $y, $z1);
        }
    }
}
return $p;
}

MostrarMatrizTridimensional(CrearMatrizTridimensional(3,4,5,5));

//Ejercicio 1. Apartado C (otro)
function CrearMatrizTridimensional($Xn, $Ym, $Zk, $z) {
    $p = array();
    $z = 0;
   for($zi = 0; $zi < $Zk; $zi++){
       for($x = 0; $x < $Xn; $x++){
           for($y = 0; $y < $Ym; $y++){
               array_push($p, $zi, $x, $y, $z);
           }
       }
   }
   
   print_r($p);
}

CrearMatrizTridimensional(3, 4, 5, 5);

//Ejercicio 1. Apartado D
        function MostrarMatrizTridimensional_Z($valor, $array) {

            foreach ($array as $key => $value) {
                if ($key == $valor) {
                    foreach ($value as $key1 => $value1) {
                        foreach ($value1 as $key2 => $value2) {
                            echo "La matriz de indice1 " . $key1 . ", indice2 " . $key2 . " e indice3 " . $key . " tiene el valor: " . $value2 . "<br>";
                        }
                    }
                }
            }
        }

        $valor = "Z3";

        echo MostrarMatrizTridimensional_Z($valor, $A);


        echo "<br>";
        echo "<br>";

//Ejercicio 2. Apartado A
function Creartabla($fil, $col) {
    $tabla1 = new Tabla($fil, $col);
    $tabla1->cargar(1, 1, "NOTAS");
 
    for ($f = 2, $c = 1; $f <= $fil; $f++) {
        $tabla1->cargar($f, $c, "alum" . ($f - 1));
    }
 
    for ($f = 1, $c = 2; $c <= $col; $c++) {
        $tabla1->cargar($f, $c, "asig" . ($c - 1));
    }
   
    for ($f = 2; $f <= $fil; $f++) {
        for ($c = 2; $c <= $col; $c++) {
            $tabla1->cargar($f, $c, $f+3);
        }
    }
    $tabla1->graficar();
}
 
Creartabla(10, 10);

        
        
        
        
        
        
        ?>
    </body>
</html>

