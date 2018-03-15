<?php namespace Poppy\Extension\IpStore\Traits;

use Poppy\Framework\Helper\UtilHelper;

trait IpStoreTrait
{
	protected $localArea = '';

	protected function isLocal($ip)
	{
		if (UtilHelper::isIp($ip)) {
			$tmp = explode('.', $ip);
			if ($tmp[0] == 10 || $tmp[0] == 127 || ($tmp[0] == 192 && $tmp[1] == 168) || ($tmp[0] == 172 && ($tmp[1] >= 16 && $tmp[1] <= 31))) {
				$this->localArea = 'LAN';

				return true;
			}
			elseif ($tmp[0] > 255 || $tmp[1] > 255 || $tmp[2] > 255 || $tmp[3] > 255) {
				$this->localArea = 'Unkonw';

				return true;
			}

			return false;
		}

		$this->localArea = 'unvalid ip4 address';

		return true;
	}
}
