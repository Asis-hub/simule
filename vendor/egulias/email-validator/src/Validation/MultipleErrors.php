<?php

namespace Egulias\EmailValidator\Validation;

use Egulias\EmailValidator\Exception\InvalidEmail;

class MultipleErrors extends InvalidEmail
{
    final public const CODE = 999;
    final public const REASON = "Accumulated errors for multiple validations";

    /**
     * @param InvalidEmail[] $errors
     */
    public function __construct(private readonly array $errors)
    {
        parent::__construct();
    }

    /**
     * @return InvalidEmail[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
