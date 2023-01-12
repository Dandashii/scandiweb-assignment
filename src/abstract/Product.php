<?php

namespace abstract;

class Product {
	protected $sku;
	protected $name;
	protected $price;
	protected $type;

	public function __construct($sku, $name, $price, $type) {
		$this->sku = $sku;
		$this->name = $name;
		$this->price = $price;
		$this->type = $type;
	}

	public function getSKU() {
		return $this->sku;
	}

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getType() {
		return $this->type;
	}

	public function setSKU($sku) {

	}

	public function setName($name) {

	}

	public function setPrice($price) {

	}

	public function setType($type) {

	}
}