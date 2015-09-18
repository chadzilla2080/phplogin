<?php


class Home extends CI_Controller {

	public function index(){

		$data['main_template'] = "home_view";

		$this->load->view('layouts/main_template', $data);
	}

}