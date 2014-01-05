<?php
class HashMap {
	protected $values = array();

	public function __construct() {
		$args = func_get_args();
		foreach($args as $arg) {
			$this->values[] = $arg;
		}
	}

	public function size() {
		return count($this->values);
	}

	public function get($key) {
		return isset($this->values[$key]) ? $this->values[$key] : null;
	}

	public function put($data) {
		$this->values[] = $data;
	}

	public function delete($key) {
		if(isset($this->values[$key])) {
			unset($this->values[$key]);
			$this->values = array_values($this->values);
		}
	}

	public function contains($data) {
		return in_array($data, $values);
	}

	public function match($data) {
		foreach($this->values as $value) {
			if(preg_match($data, $value)) {
				return true;
			}
		}
		return false;
	}

	public function join($delimiter) {
		return implode($delimiter, $this->values);
	}

	public function __toString() {
		return json_encode($this->values);
	}
}
