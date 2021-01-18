<?php

namespace Cofe\Process\Step;

use Cofe\Cofe\CofeInterface;

class AddCofe implements CookingStepInterface
{
    public function execute(CofeInterface $cofe): void
    {
        $cofe->addCofe();
    }

    public function getName(): string
    {
        return 'cofe';
    }

    public function isOptional(): bool
    {
        return false;
    }
}