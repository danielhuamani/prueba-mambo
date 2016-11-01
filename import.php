<?php
/**
 * Crea las clases que creas necesarias para hacer el trabajo.
 * Ten en cuenta que el archivo `users.csv`
 */
$db = require __DIR__.'/db.php';
require 'modelo.php';


class lecturaExcel{

	public function leerInsertar(){
		$archivo = fopen("users.csv", "r");
		$arreglo = array();
		$arreglo_simple = array();
		$contador = 0;
		while(!feof($archivo)) {
			if($contador==0){
				$linea = fgets($archivo);

			}else{
				$linea = fgets($archivo);
				if ($linea) {
					# code...
					$linea_nueva = split('\|', $linea);
					$separacion_numero = split('\-', $linea_nueva[3]);

					$texto = "("."'$linea_nueva[0]'".", "."'$linea_nueva[1]'".", "."'$linea_nueva[2]'".", "."'$separacion_numero[0]'".", "."'$separacion_numero[1]'".", "."'$linea_nueva[4]'".")";
					array_push($arreglo, $texto);
				}

			}
			$contador = $contador +1 ;
		}


		 return $arreglo;
	}
}

$excel = new lecturaExcel();
$leer = $excel -> leerInsertar();

$modelo = new ClaseModelo();
$insertar = $modelo -> insertarUsers($leer);
