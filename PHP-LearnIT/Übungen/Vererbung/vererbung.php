<?php

class Car
{
    protected $ps;

    public function __construct($ps)
    {
        $this->ps = $ps;
    }

    public function drive($location)
    {
        var_dump("Ein Auto faehrt mit {$this->ps} PS in {$location}");   
    }
}

class SuperCar extends Car 
{
    public function drive($location)
    {
        var_dump("Ein SuperCar fliegt nach {$location}, weil das SuperCars können!");
        parent::drive($location);       //damit kann die ursprüngliche Methode aus der Elternklasse geladen werden
    }
    public function __construct($ps) {
        parent::__construct($ps + 500);
        // $this->ps = $ps + 500;
    }
}

$wv = new Car(150);
$wv->drive("Berlin");

var_dump($wv);

$mbw = new SuperCar(350);
$mbw->drive("Himmelspforte");

?>