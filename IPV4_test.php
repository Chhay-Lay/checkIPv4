<?php
	function checkIPv4($ip): boolean
	{
		$each_part = explode('.', $ip);
		
		if(substr_count($ip, '.') === 3) 
		{
			foreach($each_part as $part)
			{
				if($part[0] === 0)
				{
					echo ('invalid IPv4');
					return false;
				}
				else if((intval($part) > 255) || (intval($part) < 0))
				{
					echo ('invalid IPv4');
					return false;
				}
			}
			echo('valid IPv4');
			return true;
		}else{
			echo ('invalid IPv4');
			return false;
		}
	}
	
	checkIPv4('192.168.1.1');
