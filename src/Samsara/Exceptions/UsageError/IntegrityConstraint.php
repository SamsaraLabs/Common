<?php

namespace Samsara\Exceptions\UsageError;

use Exception;
use Samsara\Exceptions\Base\UsageError;

class IntegrityConstraint extends UsageError
{

    public function __construct($constraint, $suggestedSolution, $message = "", $code = 0, Exception $previous = null)
    {
        $message = 'Message: '.$message.' | Constraint: '.$constraint.' | Suggestion: '.$suggestedSolution;

        parent::__construct($message, $code, $previous);
    }

}