<?php

class Cars3
{
    public $wheel_count = 4;
    private $door_count=4;
    protected $seat_count=2;

    function car_detail()
    {
      echo $this->wheel_count;
      echo $this->door_count;
      echo $this->seat_count;


    }
}

$bmv = new Cars3();
$bmv->car_detail();
