<?php

class car{
    public $color;
    public $model;
    public $year;

    public function __construct($color, $model, $year){
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo(){
        return " My car " .$this->color. ' ' .$this->model. ' ' .$this->year. ' ';
    }

}

$myCar = new Car("black", "Toyota", "2022" );
echo $myCar->getCarInfo(), '<br>';

$myCar = new Car("red", "Renault", "2005");
echo $myCar->getCarInfo(), '<br>';