<?php


class Plane extends Transport
{
    public function startRuta(){
        return "Distance that $this->model has to cover: $this->route km";
    }


    public function alimentareCombustibil(){
        return "Fuel in the tank: $this->consum /100km";
    }


    public function combustibilRamas(){
        if ($this->combustibil_rezervor == "500") {
            return "Not enough fuel! There is only $this->combustibil_rezervor in reservoir!";
        } elseif ($this->combustibil_rezervor == "800") {
            return "$this->combustibil_rezervor liters was and $this->combustibil_rezervor - $this->consum liters of fuel left in the tank";
        } else {
            return 0;
        }

    }
}
