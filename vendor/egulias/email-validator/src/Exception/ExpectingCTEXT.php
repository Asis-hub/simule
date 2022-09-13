<?php

namespace Egulias\EmailValidator\Exception;

class ExpectingCTEXT extends InvalidEmail
{
    final public const CODE = 139;
    final public const REASON = "Expecting CTEXT";
}
