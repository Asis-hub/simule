<?php

namespace Egulias\EmailValidator\Exception;

class NoLocalPart extends InvalidEmail
{
    final public const CODE = 130;
    final public const REASON = "No local part";
}
