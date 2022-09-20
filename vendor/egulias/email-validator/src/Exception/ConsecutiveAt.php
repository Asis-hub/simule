<?php

namespace Egulias\EmailValidator\Exception;

class ConsecutiveAt extends InvalidEmail
{
    final public const CODE = 128;
    final public const REASON = "Consecutive AT";
}
