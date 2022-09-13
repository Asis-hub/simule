<?php

namespace Egulias\EmailValidator\Exception;

class UnopenedComment extends InvalidEmail
{
    final public const CODE = 152;
    final public const REASON = "No opening comment token found";
}
