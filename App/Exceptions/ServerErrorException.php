<?php

namespace App\Exceptions;

class ServerErrorException extends \Exception
{
    protected $message = 'Internal Server Error';
    protected $code = 500;
}
