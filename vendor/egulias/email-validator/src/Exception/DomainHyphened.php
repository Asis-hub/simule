<?php

namespace Egulias\EmailValidator\Exception;

class DomainHyphened extends InvalidEmail
{
    final public const CODE = 144;
    final public const REASON = "Hyphen found in domain";
}
