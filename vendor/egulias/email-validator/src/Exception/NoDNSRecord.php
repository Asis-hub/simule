<?php

namespace Egulias\EmailValidator\Exception;

class NoDNSRecord extends InvalidEmail
{
    final public const CODE = 5;
    final public const REASON = 'No MX or A DSN record was found for this email';
}
