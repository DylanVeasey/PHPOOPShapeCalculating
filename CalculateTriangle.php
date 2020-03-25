<?php
class Triangle {

    private $_triArea;
    private $_triBase;
    private $_triHeight;
    private $_triPerimeter;

    public function TriArea() {
        return $this->_triArea;
    }

    public function TriBase() {
        return $this->_triBase;
    }

    public function TriHeight() {
        return $this->_triHeight;
    }

    public function TriPerimeter() {
        return $this->_triPerimeter;
    }

    public function setBase() {
        $this->_triBase = $_POST["Base"];
        echo("The base of the triangle is:".$this->_triBase); 
        echo("<br>");   
    }

    public function setHeight() {
        $this->_triHeight = $_POST["Height"];
        echo("The height of the triangle is:".$this->_triHeight);
        echo("<br>");
    }

    public function calculateArea(){
        $this->_triArea = (($this->_triBase * $this->_triHeight) / 2);
        echo("The area of the triangle is:" .$this->_triArea);
        echo("<br>");
    }

    public function calculatePerimeter(){
        $this->_triPerimeter =  $this->_triBase + (sqrt((pow($this->_triBase , 2)) + (4*(pow($this->_triHeight ,2)))));
        echo("The perimeter of the triangle is:" .$this->_triPerimeter);
        echo("<br>");
    }
}
$Triangle1 = new Triangle();
$Triangle1->setBase();
$Triangle1->setHeight();
$Triangle1->calculateArea();
$Triangle1->calculatePerimeter();
?>