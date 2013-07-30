<?php
class Main extends CI_Controller
{
	

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
		$data['path']=$this->deploy->getPath();
		$this->load->view('main_v',$data);
	}
}
?>