<?php

namespace Egulias\EmailValidator\Warning;

abstract class Warning implements \Stringable
{
    public const CODE = 0;

    /**
     * @var string
     */
    protected $message = '';

    /**
     * @var int
     */
    protected $rfcNumber = 0;

    /**
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function code()
    {
        return static::CODE;
    }

    /**
     * @return int
     */
    public function RFCNumber()
    {
        return $this->rfcNumber;
    }

    public function __toString(): string
    {
        return $this->message() . " rfc: " .  $this->rfcNumber . "interal code: " . static::CODE;
    }
}
