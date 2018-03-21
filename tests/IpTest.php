<?php namespace Poppy\Extension\IpStore\Tests;

use PHPUnit\Framework\TestCase;
use Poppy\Extension\IpStore\Repositories\Mon17;
use Poppy\Extension\IpStore\Repositories\Qqwry;
use Poppy\Extension\IpStore\Repositories\Sina;
use Poppy\Extension\IpStore\Repositories\Taobao;
use Poppy\Extension\IpStore\Repositories\Tiny;

class IpTest extends TestCase
{
	public function testTiny()
	{
		$ip = (new Tiny())->area('39.71.122.222');
		echo $ip;
	}

	/**
	 * @throws \Exception
	 */
	public function testMon17()
	{
		$ip = (new Mon17())->area('39.71.122.222');
		echo $ip;
	}


	public function testTaobao()
	{
		$ip = (new Taobao())->area('39.71.122.222');
		echo $ip;
	}


	public function testSina()
	{
		$ip = (new Sina())->area('39.71.122.222');
		echo $ip;
	}


	public function testQqwry()
	{
		$ip = (new Qqwry())->area('39.71.122.222');
		echo $ip;
	}
}