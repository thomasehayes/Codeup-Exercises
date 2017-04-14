<?php  

class Rectangle {
	public $height;
	public $width;

	public function __construct($height, $width) {
		if(!is_numeric($height) || !is_numeric($width)) {
			echo "Try again with numeric values!";
		} else {
			$this->height = $height;
			$this->width = $width;
		}
	}
	public function area() {
		echo "Area of a rectangle: ";
		return ($this->height) * ($this->width);
	
	}
}
?>