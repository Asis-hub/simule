<?php

namespace Egulias\EmailValidator\Exception;

class UnclosedQuotedString extends InvalidEmail
{
    final public const CODE = 145;
    final public const REASON = "Unclosed quoted string";
}
