<?php


abstract class Transport
{
    public $model;
    public $consum;
    public $combustibil_rezervor;
    public $route;

    public function __construct($model, $consum, $combustibil_rezervor, $route){
        $this -> model = $model;
        $this -> consum = $consum;
        $this -> combustibil_rezervor = $combustibil_rezervor;
        $this -> route = $route;

    }
    abstract public function startRuta();
    abstract public function alimentareCombustibil();
    abstract public function combustibilRamas();

}
