<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2016, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\tests\mocks\core;

class MockCallable extends \lithium\core\Object {

	public $construct = [];

	public $call = [];

	public $get = '';

	public static $callStatic = [];

	public function __construct() {
		$this->construct = func_get_args();
	}

	public function __call($method, $params = []) {
		return $this->call = compact('method', 'params');
	}

	public static function __callStatic($method, $params) {
		return static::$callStatic = compact('method', 'params');
	}

	public function __get($value) {
		return $this->get = $value;
	}
}

?>