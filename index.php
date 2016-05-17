<?php

//Creo array
function crear(){

	// Creo ciclo para cargar columas que son 4
	for($i = 0; $i < 4; $i++){

		// Creo ciclo para cargar las filas que son 40
		for($j = 0; $j < 40; $j++){
			// Almaceno en la posicion de la matriz los valores del ciclo
			$arr[$i][$j] = $i.$j;
			//echo "<br>Llega ORI X=".$i." Y=".$j;
		}
	}

	//Retorno array
	return $arr;
}



// Borrar array
function borrarPos($array,$x,$y,$valor){
	
	// Creo Array
	$newArray = array();

	// Creo valor para x
	$xval = 0;
	
	// Recorro array
	foreach ($array as $xx ) {
		
		// Creo valor para y
		$yval = 0;

		// Recorro nivel del matrix
		foreach ($xx as $yy) {
			
			´//Por valor 
			//if($yy == $valor){
			//Comrpuebo que las posiciones sean iguales
			if(($x == $xval) && ($y == $yval)){				

				echo "<br>Valor borrado de posicion: X=".$xval ." Y=".$yval."<br>";
			}else{
				//echo "<br>Llega X=".$xval." Y=".$yval;
				// Almaceno valor
				$newArray[$xval][$yval] = $yy;
				
			}

			// Incremento Valor en y
			$yval++;	
		}

		// Incremento valor en x
		$xval++;
	}

	return $newArray;
}

// Funcion contar matriz
function contarMatriz($array){

	// Creo parametros
	$datos = array();
	$x = 0;
	$y = 0;

	// Recorro ciclo de posicion x
	foreach ($array as $xx ) {

		// Recorro ciclo de posicion y
		foreach ($xx as $yy) {

			// Cuento los valores en y
			$y++;
		}

		// Cuento los valores en x
		$x++;
	}

	// Guardo valores
	$datos['x'] = $x;
	$datos['y'] = $y;

	// Retorno respuesta
	return $datos;
}


$arr = crear();

$test = contarMatriz($arr);
echo "<br> Cantidad Inicial X=".$test['x'];
echo "<br> Cantidad Inicial Y=".$test['y'];

$xrand = rand(0, 3);
$yrand = rand(0, 39);
// Imprimo un valor aleatorio
echo "<br><br><br> Valor Aleatorio X=".$xrand." Y=".$yrand." VALOR:".$arr[$xrand][$yrand];
echo "<br>";

$arr = borrarPos($arr,$xrand,$yrand);

$test2 = contarMatriz($arr);
echo "<br> Cantidad Final X=".$test2['x'];
echo "<br> Cantidad Final Y=".$test2['y'];
?>