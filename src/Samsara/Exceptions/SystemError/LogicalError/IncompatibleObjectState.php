<?php

namespace Samsara\Exceptions\SystemError\LogicalError;

use Exception;
use Samsara\Exceptions\Base\SystemError;

class IncompatibleObjectState extends SystemError
{

    public function __construct($constraint, $suggestedSolution, $message = "", $code = 0, Exception $previous = null)
    {
        $message = 'Message: '.$message.' | Constraint: '.$constraint.' | Suggestion: '.$suggestedSolution;

        parent::__construct($message, $code, $previous);
    }

}