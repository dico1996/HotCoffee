<?php

namespace Cofe\Process\Step;

include 'Process/Step/CookingStepInterface.php';

use Cofe\Cofe\CofeInterface;

class BoilWater implements CookingStepInterface
{
    public function execute(CofeInterface $cofe): void
    {
        // TODO: Implement execute() method.
    }

    public function getName(): string
    {
        return 'boil';
    }

    public function isOptional(): bool
    {
        return false;
    }
}