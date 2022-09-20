<?php

namespace Egulias\EmailValidator\Warning;

class AddressLiteral extends Warning
{
    final public const CODE = 12;

    public function __construct()
    {
        $this->message = 'Address literal in domain part';
        $this->rfcNumber = 5321;
    }
}
