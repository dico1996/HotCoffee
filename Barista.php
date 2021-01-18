<?php

namespace Cofe;

include 'Cofe\Provider\GetByCountry.php';
include 'CofeFactory.php';

class Barista
{
    public function handleOrder(array $config): string
    {
        $getByCountry = new \Cofe\Cofe\Provider\GetByCountry();
        $cofeFactory = new \Cofe\CofeFactory();

        $cofe = $getByCountry->execute($config['country']);
        $cofeFactory->create($cofe, $config);

        return sprintf('Price: %s</br>Ingredients:</br>%s', $cofe->getPrice(), $cofe->getIngredients());
    }
}
