<?php  

class Rectangle {
	private $height;
	private $width;

	public function __construct($height, $width) {
		if(!is_numeric($height) || !is_numeric($width)) {
			echo "Try again with numeric values!";
		} else {
			$this->setHeight($height);
			$this->setWidth($width);
		}
	}

	protected function setHeight($height) {
		$this->height = $height;
	}

	protected function setWidth($width) {
		$this->width = $width;
	}

	public function getHeight() {
		return $this->height; 
	}

	public function getWidth() {
		return $this->width;
	}

	public function area() {
		return ($this->height) * ($this->width);
	
	}

	public function perimeter() {
		return 2 * ($this->height + $this->width);
	}
}
?>