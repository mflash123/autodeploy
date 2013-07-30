<?php
class Config extends CI_Controller
{
	/**
	config controller
	*/
	function __construct()
	{
		parent::__construct();
		$this->load->library('deploy');
		$this->load->view('header_v');
	}

	public function index() 
	{
		$data['lines']=$this->deploy->getHost();
		$data['branches']=$this->deploy->getBranch();
		$this->load->view('config_v',$data);
	}
}