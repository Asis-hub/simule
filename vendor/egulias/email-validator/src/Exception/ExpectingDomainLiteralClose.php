<?php

namespace Egulias\EmailValidator\Exception;

class ExpectingDomainLiteralClose extends InvalidEmail
{
    final public const CODE = 137;
    final public const REASON = "Closing bracket ']' for domain literal not found";
}
