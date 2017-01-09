<?php

namespace Samsara\Exceptions\Base;

use Exception;

class UsageError extends \Exception
{

    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return get_class($this).': "'.$this->message.'" in '.$this->file.' (Line: '.$this->line.')\n'.$this->getTraceAsString();
    }

}