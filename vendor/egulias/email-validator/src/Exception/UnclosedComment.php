<?php

namespace Egulias\EmailValidator\Exception;

class UnclosedComment extends InvalidEmail
{
    final public const CODE = 146;
    final public const REASON = "No closing comment token found";
}
