<?php

namespace Egulias\EmailValidator\Exception;

class DotAtStart extends InvalidEmail
{
    final public const CODE = 141;
    final public const REASON = "Found DOT at start";
}
