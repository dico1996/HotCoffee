<?php

namespace Cofe\Process;

include 'Process/Step/BoilWater.php';
include 'Process/Step/IntoCup.php';
include 'Process/Step/AddCofe.php';
include 'Process/Step/AddMilk.php';
include 'Process/Step/AddSyrup.php';
include 'Process/Step/AddAddition.php';
include 'Process/ProcessInterface.php';
include 'Process/Validator.php';

use Cofe\Cofe\CofeInterface;
use Cofe\Process\Step\CookingStepInterface;

class Simple implements ProcessInterface
{
    public function cook(CofeInterface $cofe, array $optionalSteps): void
    {
        $validator = new Validator();
        $steps = [
            new \Cofe\Process\Step\BoilWater(),
            new \Cofe\Process\Step\IntoCup(),
            new \Cofe\Process\Step\AddCofe(),
            new \Cofe\Process\Step\AddMilk(),
            new \Cofe\Process\Step\AddSyrup(),
            new \Cofe\Process\Step\AddAddition(),
        ];

        /** @var CookingStepInterface $step */
        foreach ($steps as $step) {
            if ($validator->isValid($step, $optionalSteps)) {
                $step->execute($cofe);
            }
        }
    }
}
