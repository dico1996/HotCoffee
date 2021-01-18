<?php

namespace Cofe;

use Cofe\Cofe\CofeInterface;
use Cofe\Process\Simple;

include "Process/Simple.php";

class CofeFactory
{
    public function create(CofeInterface $cofe, array $config): CofeInterface
    {
        $process = new Simple();
        $cofe->cook($process, $config['extra'] ?? []);

        return $cofe;
    }
}