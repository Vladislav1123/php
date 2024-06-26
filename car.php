<?php

class car{
    public string $color;
    public string $model;
    public int $year;
    public string $price;


    public function __construct( string $color, string $model, int $year, string $price ){
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }

    public function getCarInfo(): string{
        return " My car " .$this->color. ' ' .$this->model. ' ' . ' From ' .$this->year. ' priced at $ ' .$this->price ;
    }

}

$myCar = new Car("black", "Toyota", "2022" , '38 000.00' );
echo $myCar->getCarInfo(), '<br>';

$myCar = new Car("red", "Renault", "2005" , '4 200.00' );
echo $myCar->getCarInfo(), '<br>';