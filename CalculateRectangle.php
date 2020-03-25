<?php
class Rectangle {

    private $_rectArea;
    private $_rectLength;
    private $_rectWidth;
    private $_rectPerimeter;

    public function RectArea() {
        return $this->_rectArea;
    }

    public function RectLength() {
        return $this->_rectLength;
    }

    public function RectWidth() {
        return $this->_rectWidth;
    }

    public function RectPerimeter() {
        return $this->_rectPerimeter;
    }

    public function setWidth() {
        $this->_rectWidth = (int)$_POST["Width"];
        echo("The width of the rectangle is:".$this->_rectWidth); 
        echo("<br>");   
    }

    public function setLength() {
        $this->_rectLength = (int)$_POST["Length"];
        echo("The length of the rectangle is:".$this->_rectLength);
        echo("<br>");
    }

    public function calculateArea(){
        $this->_rectArea = $this->_rectLength * $this->_rectWidth;
        echo("The area of the rectangle is:" .$this->_rectArea);
        echo("<br>");
    }

    public function calculatePerimeter(){
        $this->_rectPerimeter = (2 * $this->_rectLength) + (2 * $this->_rectWidth);
        echo("The perimeter of the rectangle is:" .$this->_rectPerimeter);
        echo("<br>");
    }
}
$Rectangle1 = new Rectangle();
$Rectangle1->setWidth();
$Rectangle1->setLength();
$Rectangle1->calculateArea();
$Rectangle1->calculatePerimeter();
?>