<?php namespace Poppy\Extension\IpStore\Repositories;

use Poppy\Extension\IpStore\Contracts\Ip as IpContract;
use Poppy\Extension\IpStore\Traits\IpStoreTrait;

class Sina implements IpContract
{
	use IpStoreTrait;
	private $url = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=__IP__';

	public function area($ip)
	{
		if ($this->isLocal($ip)) {
			return $this->localArea;
		}
		$sinaapi = str_replace('__IP__', $ip, $this->url);
		$ipdata  = file_get_contents($sinaapi);
		if ($ipdata) {
			$ipdata = str_replace(['var remote_ip_info = ', ';'], ['', ''], $ipdata);
			$arr    = json_decode($ipdata, true);
			$area   = '';
			if (isset($arr['country']) && strpos($ipdata, "\u4e2d\u56fd") === false) $area .= $arr['country'];
			if (isset($arr['province'])) $area .= $arr['province'];
			if (isset($arr['city'])) $area .= $arr['city'];
			if (isset($arr['isp'])) $area .= $arr['isp'];
			if ($area) {
				return $area;
			}

			return 'Unknown';
		}

		return 'API Error';
	}
}