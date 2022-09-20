<?php

namespace Egulias\EmailValidator\Exception;

class AtextAfterCFWS extends InvalidEmail
{
    final public const CODE = 133;
    final public const REASON = "ATEXT found after CFWS";
}
