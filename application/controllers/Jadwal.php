<?php

/**
* 
*/
class Jadwal extends CI_Controller
{
	
	
	
	public function index()
	{
		$this->load->view('jadwal');
	}

	public function input()
	{
		$this->load->view('input_jadwal');
	}
}