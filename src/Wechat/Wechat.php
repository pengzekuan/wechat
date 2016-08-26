<?php

namespace Peter\Wechat;

use Exception;
/**
* wechat
*/
class Wechat {

	protected $app_id;

	protected $app_key;

	protected $encodingAESKey;

	protected $token;

	public function __construct($customer_config = array()) {
		$default = include('config.php');
		$config = array_merge($default, $customer_config);
		$options = get_class_vars(get_class($this));
		foreach ($config as $key => $value) {
			if(!array_key_exists($key, $options)) {
				continue;
			}
			$this->__set($key, $value);
		}
	}

	public function __get($key) {
		if(!property_exists(get_class($this), $key)) {
			throw new Exception("Property is not exists.");
		}
		return $this->$key;
	}

	public function __set($key, $value) {
		$this->$key = $value;
	}
}
