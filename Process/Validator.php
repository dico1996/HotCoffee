<?php

namespace Cofe\Process;

use Cofe\Process\Step\CookingStepInterface;

class Validator
{
    public function isValid(CookingStepInterface $step, array $optionalSteps): bool
    {
        return !$step->isOptional() || ($step->isOptional() && in_array($step->getName(), $optionalSteps));
    }
}