<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array('judul' => 'Home', 'konten' => 'home/index');
		$this->load->view('layout/wrapper', $data);
	}

}