<?php

echo"<h2>Ejercicio nro 1<h2/>";

echo"<p>ejercicio 1: crear dos variables pais y continente y poner su valor por pantalla (imprimir y luego ponerle un comentario de que tipo de dato tiene)</p>";

$pais = "argentina";
$continente = "americano";

echo"<h2>El Pais es $pais, situado en el continente $continente<h2/>";

var_dump($pais);

echo"<hr/>";

//------------------------------------------------------------------------

echo"<h2>Ejercicio nro 2<h2/>";

echo"<p>Ejercicio 2: escribir un script en php q muestre por pantalla todos los numeros pares del 1 al 100 (usar un bucle for)</p>";

echo"<h2>Mostrar los numeros pares del 1 al 100<h2/>";
for($i = 1; $i <=100; $i++) {
    if($i%2 === 0){
        echo"$i.<br/>";
    }
    
} 

echo"<hr/>";

//---------------------------------------------------------------------------

echo"<h2>Ejercicio nro 3<h2/>";

echo"<p>Ejercicio 3: escribir un programa que imprima los cuadrados de los 40 primeros numeros naturales, del 1 al 40, utilizar bucle while</p>";

$contador = 1;

while($contador<=40){
    $cuadrado = $contador * $contador;
    echo"El cuadrado de $contador es $cuadrado".", ";
    $contador++;
}

echo"<hr/>";

//-----------------------------------------------------------------------------

echo"<h2>Ejercicio nro 4<h2/>";

echo"<p>Ejercicio 4: recoger 2 numeros por la url con GET y hacer todas las operaciones basicas de una calculadora, suma resta, multiplicacion y division de esas dos variables</p>";

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo"<h2>Calculadora<h2/>";
    echo "Suma = ".($numero1+$numero2)."<br/>";
    echo "Resta = ".($numero1-$numero2)."<br/>";
    echo "Multiplicacion = ".($numero1*$numero2)."<br/>";
    echo "Division = ".($numero1/$numero2)."<br/>";
}

echo"<hr/>";

//-------------------------------------------------------------------------------------

echo"<h2>Ejercicio nro 5<h2/>";

echo"<p>Ejercicio 5: hacer un programa que muestre todos los numeros entre dos numeros que nos lleguen por la url usando _get</p>";

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i = $numero1; $i < $numero2; $i++){
            echo"<h4>$i</h4>";
    
        }
    }else {
        echo"No entendiste la consigna";
    }
    

}else {
    echo"<h1>Los parametros get no existen<h2/>";
}

echo"<hr/>";

//------------------------------------------------------------------------------------

echo"<h2>Ejercicio nro 6<h2/>";

echo"<p>Ejercicio 6: mostrar las tablas de multiplicar del 1 al 10 en una tabla de html</p>";

echo"<table border = '2'> <tr>"; //inicio de la tabla

echo"<tr>"; //inicio fila 1
    for($cabecera=1; $cabecera<=10; $cabecera++){
        echo"<td>Tabla del $cabecera</td>";
    }
echo"</tr>"; //cierre fila 1 

echo"<tr>"; //inicio fila 2
    for($i=1; $i<=10; $i++){
        echo"<td>";
            for($x=1;$x <= 10; $x++){
                echo"$i x $x = ".($i*$x)."<br/>";            
            }
        echo"</td>";
    }
echo"</tr>"; //cierre fila 2

echo"</table>"; //fin de la tabla

echo"<hr/>";

//---------------------------------------------------------

echo"<h2>Ejercicio nro 7</h2>";

echo"<p>Ejercicio nro 7: hacer igual que el 5, mostrar los numeros entre dos numeros, pero imprimiendo los impares</p>";

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i = $numero1; $i < $numero2; $i++){
            if($i%2 !== 0){
                echo"<h4>$i es impar</h4>";
            }else{
                echo"<h4>$i es par</h4>";
            }
        }
    }else {
        echo"No entendiste la consigna";
    }
    

}else {
    echo"<h1>Los parametros get no existen<h2/>";
}

echo"<hr/>";

//fin del primer bloque de ejercicios de php

echo"<p>so far... so good...</p>";

?>