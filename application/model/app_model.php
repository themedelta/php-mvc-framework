<?php
class App_model {
	function getData($id) {
		//include_once("config/database.php"); //include db connection from config
		$id = new mongoInt32($id); //parse to integer
		//$res = $conn->$collection->find(array('id' => $id));
		return $res;
	}
}
?>