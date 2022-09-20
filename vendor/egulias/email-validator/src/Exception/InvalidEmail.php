<?php

namespace Egulias\EmailValidator\Exception;

abstract class InvalidEmail extends \InvalidArgumentException
{
    public const REASON = "Invalid email";
    public const CODE = 0;

    public function __construct()
    {
        parent::__construct(static::REASON, static::CODE);
    }
}
