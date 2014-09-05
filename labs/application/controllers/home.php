<?php

class Home extends CI_Controller{
	
	public function index()
	{
		
		$this->load->helper('url');
	
		
		$data['base_url'] = base_url();
		$this->load->view('date', $data);

	}
}