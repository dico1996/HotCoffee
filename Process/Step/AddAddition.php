<?php

namespace Cofe\Process\Step;

use Cofe\Cofe\CofeInterface;

class AddAddition implements CookingStepInterface
{
    public function execute(CofeInterface $cofe): void
    {
        $cofe->addAddition();
    }

    public function getName(): string
    {
        return 'addition';
    }

    public function isOptional(): bool
    {
        return true;
    }
}