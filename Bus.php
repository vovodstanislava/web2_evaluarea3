<?php


class Bus extends Transport
{
    public function startRuta(){
        return "Distance that $this->model has to cover: $this->route km";
    }


    public function alimentareCombustibil(){
        return "Fuel in the tank: $this->consum /100km";
    }


    public function combustibilRamas(){
        return "The bus starts up, but the fuel is  $this->combustibil_rezervor litres and it is enough only for 500 km.";
    }
}
