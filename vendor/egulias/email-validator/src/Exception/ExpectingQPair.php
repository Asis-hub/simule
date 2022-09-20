<?php

namespace Egulias\EmailValidator\Exception;

class ExpectingQPair extends InvalidEmail
{
    final public const CODE = 136;
    final public const REASON = "Expecting QPAIR";
}
