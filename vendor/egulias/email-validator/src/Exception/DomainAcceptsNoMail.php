<?php

namespace Egulias\EmailValidator\Exception;

class DomainAcceptsNoMail extends InvalidEmail
{
    final public const CODE = 154;
    final public const REASON = 'Domain accepts no mail (Null MX, RFC7505)';
}