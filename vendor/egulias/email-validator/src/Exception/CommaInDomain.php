<?php

namespace Egulias\EmailValidator\Exception;

class CommaInDomain extends InvalidEmail
{
    final public const CODE = 200;
    final public const REASON = "Comma ',' is not allowed in domain part";
}
