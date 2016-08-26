<?php

namespace Peter\Wechat\Test;

use Peter\Wechat\AccessToken;
/**
* 
*/
class AccessTokenTest extends TestCase {
	
	protected $wechat;

	public function __construct() {
		parent::__construct();
		$arr = [
			'appid' => 'kkk',
			'abc' => 'abc'
		];
		$this->wechat = new AccessToken($arr);	
	}

	public function testConstruct() {
		var_dump($this->wechat);
	} 
}