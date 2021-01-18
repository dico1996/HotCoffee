<?php

namespace Cofe\Cofe;

require_once "Cofe/CofeInterface.php";

use Cofe\Process\ProcessInterface;

class Spain implements CofeInterface
{
    CONST TAX = 3;

    /**
     * @var float
     */
    private $price = 0;

    /**
     * @var string
     */
    private $ingredient = '';

    public function addCofe(): void
    {
        $this->price += 1;
        $this->ingredient .= 'Double cofe</br>';
    }

    public function addMilk(): void
    {
        $this->price += 0.3;
        $this->ingredient .= 'Milk</br>';
    }

    public function addSyrup(): void
    {
        $this->price += 0.5;
        $this->ingredient .= 'Melon</br>';
    }

    public function addAddition(): void
    {
        $this->price += 1;
        $this->ingredient .= 'Chocolate</br>';
    }

    public function cook(ProcessInterface $process, array $optionalSteps): void
    {
        $process->cook($this, $optionalSteps);
    }

    public function getPrice(): float
    {
        return $this->price + ($this->price * self::TAX / 100);
    }

    public function getIngredients(): string
    {
        return $this->ingredient;
    }
}
