<?php
namespace Peter\Wechat\Test;

use Peter\Wechat\Wechat;

/**
* 
*/
class ConfigTest extends TestCase {
	
	protected $config;

	public function __construct() {
		parent::__construct();
		$arr = [
			'appid' => 'kkk',
			'abc' => 'abc'
		];
		$this->config = new Wechat($arr);
	}
	public function testConstruct() {
		var_dump($this->config);
	}

	public function test002() {
		$this->assertTrue($this->config->fafa == 'kkk'); 
	}
}