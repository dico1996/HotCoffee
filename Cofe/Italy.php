<?php

namespace Cofe\Cofe;

require_once "Cofe/CofeInterface.php";

use Cofe\Process\ProcessInterface;

class Italy implements CofeInterface
{
    const TAX = 7;

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
        $this->price += 1.5;
        $this->ingredient .= 'One cofe</br>';
    }

    public function addMilk(): void
    {
        $this->price += 0.4;
        $this->ingredient .= 'Milk</br>';
    }

    public function addSyrup(): void
    {
        $this->price += 0.5;
        $this->ingredient .= 'Coconut</br>';
    }

    public function addAddition(): void
    {
        $this->price += 1;
        $this->ingredient .= 'Сroissant</br>';
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
