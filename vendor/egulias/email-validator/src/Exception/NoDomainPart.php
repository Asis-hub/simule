<?php

namespace Egulias\EmailValidator\Exception;

class NoDomainPart extends InvalidEmail
{
    final public const CODE = 131;
    final public const REASON = "No Domain part";
}
