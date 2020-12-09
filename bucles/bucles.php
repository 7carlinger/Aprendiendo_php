<?php

$numero = 0;

while ($numero <= 100) {
    echo "$numero";
    if ($numero != 100) {
        echo ", ";
    }
    $numero++;
}

echo "<hr/>";

//----------------------------------------------------------------------

if (isset($_GET['numero'])) {
    //castear una variable, asignarle un tipo
    $numero = (int)$_GET['numero'];
}else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";

$contador = 1;
while($contador <= 10) {
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

echo"<hr/>";

//------------------------------------------------------------------------
/*bucle DO WHILE
do {

}while();
*/

//entonces

$edad = 17;
$contador = 1;
do {
    echo"Tienes acceso al contenido $contador <br/>";
    $contador++;
}while($edad >= 18 && $contador <= 10);

//-----------------------------------------------------------------------------
//BUCLE FOR
/*for (variable contador, condicion, incremento contador) {
    //bloque de instrucciones
}*/

$resultado = 1;

for($i = 0; $i <= 100; $i++) {
    //$resultado = $resultado + $i
    $resultado += $i; 
    //esto q viene es para ir mostrando el resultado linea a linea
    echo"<p>$resultado</p>";
}
echo"<h1>El resultado es: $resultado</h1>";

echo"<hr/>";

//-----------------------------------------------------------------------------
/*la tabla de multiplicar con for*/

if(isset($_GET['numero'])) {
    //castear una variable, asignarle un tipo
    $numero = (int)$_GET['numero'];
}else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar, con FOR, del numero $numero</h1>";

for($contador =1; $contador <= 10; $contador++) {
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}

//------------------------------------------------------------------------------

/*instruccion BREAK
permite salir de un bucle */

echo "<h1>Tabla de multiplicar, con FOR y usando el BREAK, del numero $numero</h1>";

for($contador =1; $contador <= 10; $contador++) {
    if($contador == 45){
        echo"No se pueden mostrar estas operaciones prohibidas";
        break;
    }

    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}








?>


