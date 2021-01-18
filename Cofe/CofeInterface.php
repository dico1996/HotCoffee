<?php

namespace Cofe\Cofe;

use Cofe\Process\ProcessInterface;

interface CofeInterface
{
    public function addCofe(): void;

    public function addMilk(): void;

    public function addSyrup(): void;

    public function addAddition(): void;

    public function cook(ProcessInterface $process, array $optionalSteps): void;

    public function getPrice(): float;

    public function getIngredients(): string;
}
