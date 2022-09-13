<?php

namespace Egulias\EmailValidator\Validation\Error;

use Egulias\EmailValidator\Exception\InvalidEmail;

class SpoofEmail extends InvalidEmail
{
    final public const CODE = 998;
    final public const REASON = "The email contains mixed UTF8 chars that makes it suspicious";
}
