<?php
class App_controller extends BaseController {
	/**
	 * function index
	 * function to display home page
	 */
	public function index() {
		$data = $this->model('app_model')->getData(); //get some data from db
		$this->view('header');
		$this->view('app_view', $data);
		$this->view('footer');
	}
}
?>