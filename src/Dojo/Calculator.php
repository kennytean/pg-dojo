<?php

namespace Dojo;

class Calculator
{
	private $val;

	public function enter($val) {
		$this->val = $val;
	}

	public function display() {
		return $this->val;
	}

	public function addition($val){
		$this->val += $val;
		return $this->val;
	}
}
