<?php

namespace Egulias\EmailValidator\Exception;

class ConsecutiveDot extends InvalidEmail
{
    final public const CODE = 132;
    final public const REASON = "Consecutive DOT";
}
