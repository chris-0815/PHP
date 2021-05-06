<?php

class Car
{
    private $ps;

    public function __construct($ps)
    {
        var_dump("__construct - methode!");
    }

    public function getPs()
    {
        return $this->ps;
    }

    public function setPs($ps)
    {
        $this->ps = $ps;
    }

    private function tanken($zeit)
    {
        echo("Du hast zuviel Gas gegeben, deswegen musst du in {$zeit} zur Tankstelle fahren");
    }

    public function drive($location)
    {
        var_dump("Ein Auto faehrt mit {$this->ps} PS in {$location}");
        $this->tanken(60);
    }


}

$wv = new Car(150);
$wv->setPs(180);
var_dump($wv->getPs());
$wv->drive("Berlin");

$wbm = new Car(250);

$wbm->drive("Budapest");


?>