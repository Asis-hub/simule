<?php

namespace Egulias\EmailValidator\Warning;

class CFWSNearAt extends Warning
{
    final public const CODE = 49;

    public function __construct()
    {
        $this->message = "Deprecated folding white space near @";
    }
}
