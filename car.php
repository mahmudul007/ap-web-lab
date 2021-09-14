<?php

class car{
    public $engineno;
    public $model;
    public $owner;

    function __construct(...$info){
        $this->engineno=$info[0];
        $this->model=$info[1];
        $this->owner=$info[2];

    }
    function get_show()
    {
        return $this->$owner;
    }
}

$bmw=new car(012,512,"rahim");
echo $bmw->get_show();


?>