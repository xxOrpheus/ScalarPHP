<?php
class String {
	public function __construct($str) {
		if(is_string($str)) {
			$this->str = $str;
		} else {
			throw new \Exception('Unacceptable data type for String');
		}
	}

	public function length() {
		return mb_strlen($this);
	}

	public function toUppercase() {
		return new String(mb_strtoupper($this));
	}

	public function toLowercase() {
		return new String(mb_strtolower($this));
	}

	public function startsWith($str) {
		return $this->substring(0, mb_strlen($str)) == $str;
	}

	public function endsWith($str) {
		return $this->substring(mb_strlen($str) * -1) == $str;
	}

	public function contains($str) {
		return mb_strpos($this, $str) !== false;
	}

	public function match($str) {
		return preg_match($str, $this);
	}

	public function matches($str) {
		preg_match_all($str, $this, $matches);
		return $matches;
	}

	public function substring($offset, $length = -1) {
		if($length > 0) {
			return mb_substr($this, $offset, $length);
		} else {
			return mb_substr($this, $offset);
		}
	}

	public function charAt($index) {
		if($index < 0 || $index >= $this->length()) {
			return null;
		}
		return $this->substring($index, 1);
	}

	public function charCodeAt($index) {
		return ord($this->charAt($index));
	}

	public function __toString() {
		return $this->str;
	}
}
