<?php

namespace Cofe\Process\Step;

use Cofe\Cofe\CofeInterface;

class AddSyrup implements CookingStepInterface
{
    public function execute(CofeInterface $cofe): void
    {
        $cofe->addSyrup();
    }

    public function getName(): string
    {
        return 'syrup';
    }

    public function isOptional(): bool
    {
        return true;
    }
}