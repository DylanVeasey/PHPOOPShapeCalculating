<?php
class Circle {

    private $_circRadius;
    private $_circArea;
    private $_circPerimeter;

    public function CircArea() {
        return $this->_circArea;
    }

    public function CircRadius() {
        return $this->_rectWidth;
    }

    public function CircPerimeter() {
        return $this->_rectPerimeter;
    }

    public function setRadius() {
        $this->_circRadius = $_POST["Radius"];
        echo("The radius of the circle is:".$this->_circRadius); 
        echo("<br>");   
    }

    public function calculateArea(){
        $this->_circArea = M_PI * pow($this->_circRadius ,2);
        echo("The area of the circle is:" .$this->_circArea);
        echo("<br>");
    }

    public function calculatePerimeter(){
        $this->_circPerimeter = M_PI * ($this->_circRadius * 2);
        echo("The perimeter of the circle is:" .$this->_circPerimeter);
        echo("<br>");
    }
}
$Circle1 = new Circle();
$Circle1->setRadius();
$Circle1->calculateArea();
$Circle1->calculatePerimeter();
?>