<?php

namespace Cofe\Cofe\Provider;

include "Cofe/Spain.php";
include "Cofe/Italy.php";

use Cofe\Cofe\CofeInterface;

class GetByCountry
{
    public function execute(string $country): CofeInterface
    {
        $class = sprintf('\Cofe\Cofe\%s', ucfirst($country));

        return new $class();
    }
}
