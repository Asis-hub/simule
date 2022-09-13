<?php

namespace Faker;

/**
 * This generator returns a default value for all called properties
 * and methods.
 *
 * @mixin Generator
 *
 * @deprecated Use ChanceGenerator instead
 */
class DefaultGenerator
{
    public function __construct(protected $default = null)
    {
        trigger_deprecation('fakerphp/faker', '1.16', 'Class "%s" is deprecated, use "%s" instead.', self::class, ChanceGenerator::class);
    }

    public function ext()
    {
        return $this;
    }

    /**
     * @param string $attribute
     *
     * @deprecated Use a method instead.
     */
    public function __get($attribute)
    {
        trigger_deprecation('fakerphp/faker', '1.14', 'Accessing property "%s" is deprecated, use "%s()" instead.', $attribute, $attribute);

        return $this->default;
    }

    /**
     * @param string $method
     * @param array  $attributes
     */
    public function __call($method, $attributes)
    {
        return $this->default;
    }
}
