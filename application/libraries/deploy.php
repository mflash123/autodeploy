<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Deploy {

    public function getHost($hostname="")
    {
    	$file = read_file('./application/config/config.inc');

		//explode $file by lines
		$lines=explode("\n", $file);

		foreach ($lines as $key =>$line)
		{
			//clean empty lines from array $lines
			if ($line=='') unset($lines[$key]);
			else 
			{
				if (!$hostname=="")
				{
					list($name, $ip, $path) = explode(":", $line);
					if ($hostname==$name)
					{
						return $ip;
						exit;
					}
				}
			}
		}
//echo "I didnt find that host in config file";
//	exit;




		//checking if file config is empty
		$count_lines=count($lines);
		if ($count_lines==0) {
			echo "No config lines";
			exit();
		}

		return $lines;
    }

    public function getPath($hostname="")
    {
    	$file = read_file('./application/config/config.inc');

		//explode $file by lines
		$lines=explode("\n", $file);

		foreach ($lines as $key =>$line)
		{
			//clean empty lines from array $lines
			if ($line=='') unset($lines[$key]);
			else 
			{
				if (!$hostname=="")
				{
					list($name, $ip, $path) = explode(":", $line);
					if ($hostname==$name)
					{
						return $path;
						exit;
					}
				}
			}
		}
    }

    public function getBranch()
    {
    	$file = read_file('./application/config/branch.inc');
    	
    	//explode $file by lines
    	$branches=explode("\n", $file);

		foreach ($branches as $key =>$line)
		{
			if ($line=='') unset($branches[$key]);
		}
    	return $branches;
    }



}