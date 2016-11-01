<?php
require 'modelo.php';
class Controlador{
	private $modelo;
	private $resultado;

	public function listarUsers(){
		$this->modelo = new ClaseModelo();
		$this->resultado = $this->modelo->listarUsers();
		return $this->resultado;
	}



}
?>
