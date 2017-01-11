<?php

namespace Samsara\Exceptions\UsageError;

use Exception;
use Samsara\Exceptions\Base\UsageError;

class OptionalExit extends UsageError
{

    public function __construct($reason, $message = "", $code = 0, Exception $previous = null)
    {
        $message = 'Message: '.$message.' | Reason: '.$reason;

        parent::__construct($message, $code, $previous);
    }

}