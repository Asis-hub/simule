<?php

namespace Egulias\EmailValidator\Exception;

class CRLFX2 extends InvalidEmail
{
    final public const CODE = 148;
    final public const REASON = "Folding whitespace CR LF found twice";
}
