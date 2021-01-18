<?php

namespace Cofe\Process\Step;

use Cofe\Cofe\CofeInterface;

class IntoCup implements CookingStepInterface
{
    public function execute(CofeInterface $cofe): void
    {
        // TODO: Implement execute() method.
    }

    public function getName(): string
    {
        return 'into_cup';
    }

    public function isOptional(): bool
    {
        return false;
    }
}