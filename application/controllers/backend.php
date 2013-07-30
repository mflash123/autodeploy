<?php
class Backend extends CI_Controller{
	public function index()
	{
		echo "asd";
	}

	public function pullbranchapply($branch,$host)
	{
		$this->load->library('deploy');
		$ip=$this->deploy->getHost($host);
		$path=$this->deploy->getPath($host);
/*
		echo "IP:";
		var_dump($ip);

		echo "PATH:";
		var_dump($path);
*/
		$output = shell_exec($_SERVER["DOCUMENT_ROOT"]."/application/deploy/applybranch.sh $host:$branch:$ip:$path");
		echo "<pre>$output</pre>";
	}
}
?>
