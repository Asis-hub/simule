<?php

namespace Egulias\EmailValidator\Exception;

class CharNotAllowed extends InvalidEmail
{
    final public const CODE = 201;
    final public const REASON = "Non allowed character in domain";
}
