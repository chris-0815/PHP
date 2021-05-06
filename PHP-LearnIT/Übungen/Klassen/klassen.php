<?php

class Car
{
    public $ps;
    
    public function drive()
    {
        var_dump("Ein Auto faehrt mit {$this->ps} PS");
    }
}

$wv = new Car($ps);
$wv->ps = 150;
$wv->drive();

$wbm = new Car($ps);
$wbm->ps = 250;
$wbm->drive();

var_dump($wbm);


?>