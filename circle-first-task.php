<?php
class Circle{
    private $radius;

    function set_radius($radius){
        $this->radius = $radius;
    }

    function get_radius(){
        return $this->radius;
    }

    //Circle's parameter
    function get_perimeter(){
        return $this->radius * 2 * pi();
    }

    //Circle's area
    function get_area(){
        return $this->radius ** 2 * pi();
    }
}

//Get all input, assume any numeric value is a radius for each circle, calculates the number of defined circles.
$num = 1;
foreach ($argv as $value){
    if (is_numeric($value)){
        $circle = new Circle();
        $circle->set_radius($value);
        echo "Circle " . $num++ . ": Radius is ";
        if($value < 0) {
            echo "an invalid number (" . $circle->get_radius() . ").\n\n";
            continue;
        }
        echo $circle->get_radius() . "\n";
        echo "with a perimeter of " . number_format($circle->get_perimeter(),2) . "\n";
        echo "and an area of " . number_format($circle->get_area(),2) . "\n\n";
    }
}

