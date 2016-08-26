<?php
namespace Peter\Wechat;

/**
* 
*/
class AccessToken extends Wechat {

	protected $access_token_api;
	
	function __construct($config = array()) {
		parent::__construct();
	}
}