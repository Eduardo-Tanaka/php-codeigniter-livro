<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "Home"; // can be change according to views
        $this->load->template('home', $data); // this will load the view file
	}
}
