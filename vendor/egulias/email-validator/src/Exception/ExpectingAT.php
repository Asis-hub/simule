<?php

namespace Egulias\EmailValidator\Exception;

class ExpectingAT extends InvalidEmail
{
    final public const CODE = 202;
    final public const REASON = "Expecting AT '@' ";
}
