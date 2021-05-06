<?php


class SuperCar extends Car 
{
    public function drive($location)
    {
        parent::drive($location);       //damit kann die ursprüngliche Methode aus der Elternklasse geladen werden
        return"Ein SuperCar fliegt nach {$location}, weil das SuperCars können!";
    }
    public function __construct($ps) {
        parent::__construct($ps + 500);
        // $this->ps = $ps + 500;
    }
}
