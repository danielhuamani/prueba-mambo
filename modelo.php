<?php
$db = require 'db.php';
class ClaseModelo{

	private $consulta;
	private $resultado;

	public function listarUsers(){
		$this->consulta = "select bame, last_name from users";
		$this->consulta = $db->prepare($this->consulta);
		$this->consulta->execute();
		$this->resultado = $this->consulta->fetchAll();
		return $this->resultado;
	}
	public function insertarUsers($arreglo){
		global $db;


		var_dump(join(',', $arreglo));
		/*$this->consulta = $db->prepare('INSERT INTO users (name,last_name,address,telephone,cellphone,avatar) VALUES '.implode(',', $arreglo));*/
		$this->consulta = $db->prepare("INSERT INTO users(name,last_name,address,telephone,cellphone,avatar) VALUES ('Nettie', 'Kuhic', '443 Toy Street Suite 496', '994321062', '6723733', 'ba4e0485265ecedd0d7edaebfe8a153a.jpg '), ('Miracle', 'Rutherford', '999 Jamar Skyway', '985756395', '5187452', '295ec48f9e6563404657c7ed271bf4d3.jpg ')");
		var_dump($this->consulta);
		$this->consulta->execute();
		return $this->consulta;
	}

}
 ?>
