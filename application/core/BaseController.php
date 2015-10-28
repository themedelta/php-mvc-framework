<?php
class BaseController {
	public function model($model) {
		require_once 'application/model/' . $model . '.php';
		return new $model();
	}

	public function view($view, $data = array()) {
		require_once 'application/view/' . $view . '.php';
	}
}
?>