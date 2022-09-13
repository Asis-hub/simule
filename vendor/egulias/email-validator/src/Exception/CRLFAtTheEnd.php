<?php

namespace Egulias\EmailValidator\Exception;

class CRLFAtTheEnd extends InvalidEmail
{
    final public const CODE = 149;
    final public const REASON = "CRLF at the end";
}
