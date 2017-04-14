<?php 

require_once 'Rectangle.php';

class Square extends Rectangle {

	public function __construct ($height) {
		return $this->height = $height;
	}

	public function perimeter() {
		return $this->height * 4;
	}
}


?>