<?php

namespace Egulias\EmailValidator\Exception;

class DotAtEnd extends InvalidEmail
{
    final public const CODE = 142;
    final public const REASON = "Dot at the end";
}
