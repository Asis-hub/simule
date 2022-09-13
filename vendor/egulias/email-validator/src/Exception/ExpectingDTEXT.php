<?php

namespace Egulias\EmailValidator\Exception;

class ExpectingDTEXT extends InvalidEmail
{
    final public const CODE = 129;
    final public const REASON = "Expected DTEXT";
}
