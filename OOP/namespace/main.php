<?php

namespace Astronomy;

include "planet.php";
include "earth.php";

$planet = new Planets\Earth();
//$planet = new Planets\Planet();
$planet->getName();
