<?php

require 'Transport.php';
require 'Bus.php';
require 'Plane.php';


$plane = new Plane("Airbus", "128", "500", "400");
echo $plane -> startRuta();
echo "<br>";
echo $plane -> alimentareCombustibil();
echo "<br>";
echo $plane -> combustibilRamas();
echo "<br>";
echo "<br>";

$bus = new Bus("Mercedes", "20", "100", "550");
echo $bus -> startRuta();
echo "<br>";
echo $bus -> alimentareCombustibil();
echo "<br>";
echo $bus -> combustibilRamas();
echo "<br>";
echo "<br>";

$plane2 = new Plane("Airbus", "128", "800", "400");
echo $plane2 -> startRuta();
echo "<br>";
echo $plane2 -> alimentareCombustibil();
echo "<br>";
echo $plane2 -> combustibilRamas();
echo "<br>";
echo "<br>";



