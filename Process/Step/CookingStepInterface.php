<?php

namespace Cofe\Process\Step;

use Cofe\Cofe\CofeInterface;

interface CookingStepInterface
{
    public function execute(CofeInterface $cofe): void;

    public function getName(): string;

    public function isOptional(): bool;
}
