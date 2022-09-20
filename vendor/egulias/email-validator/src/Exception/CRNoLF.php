<?php

namespace Egulias\EmailValidator\Exception;

class CRNoLF extends InvalidEmail
{
    final public const CODE = 150;
    final public const REASON = "Missing LF after CR";
}
