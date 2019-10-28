<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class PostNotFoundException extends Exception
{
    /**
     * @param string         $id
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(string $id = "", $code = 0, Throwable $previous = null)
    {
        $message = 'Post ID ' . $id . ' not found.';
        parent::__construct($message, $code, $previous);
    }
}
