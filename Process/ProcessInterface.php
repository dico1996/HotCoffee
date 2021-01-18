<?php

namespace Cofe\Process;

use Cofe\Cofe\CofeInterface;

interface ProcessInterface
{
    public function cook(CofeInterface $cofe, array $optionalSteps): void;
}
