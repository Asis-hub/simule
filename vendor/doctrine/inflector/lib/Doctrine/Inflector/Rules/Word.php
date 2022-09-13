<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules;

class Word
{
    public function __construct(private readonly string $word)
    {
    }

    public function getWord(): string
    {
        return $this->word;
    }
}
