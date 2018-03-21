<?php namespace Poppy\Extension\IpStore\Tests;

use PHPUnit\Framework\TestCase;

class LaravelTest extends TestCase
{
	public function testFramework()
	{
		$ip = (app('poppy.ext.ip_store'))->area('39.71.122.222');
		echo $ip;
	}
	
}