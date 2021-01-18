<?php

namespace Cofe\Process\Step;

use Cofe\Cofe\CofeInterface;

class AddMilk implements CookingStepInterface
{
    public function execute(CofeInterface $cofe): void
    {
        $cofe->addMilk();
    }

    public function getName(): string
    {
        return 'milk';
    }

    public function isOptional(): bool
    {
        return false;
    }
}