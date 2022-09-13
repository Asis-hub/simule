<?php

namespace Egulias\EmailValidator\Exception;

class ExpectingATEXT extends InvalidEmail
{
    final public const CODE = 137;
    final public const REASON = "Expecting ATEXT";
}
