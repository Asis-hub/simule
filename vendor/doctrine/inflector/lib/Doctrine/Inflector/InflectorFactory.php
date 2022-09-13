<?php

declare(strict_types=1);

namespace Doctrine\Inflector;

use Doctrine\Inflector\Rules\English;
use Doctrine\Inflector\Rules\French;
use Doctrine\Inflector\Rules\NorwegianBokmal;
use Doctrine\Inflector\Rules\Portuguese;
use Doctrine\Inflector\Rules\Spanish;
use Doctrine\Inflector\Rules\Turkish;
use InvalidArgumentException;

use function sprintf;

final class InflectorFactory
{
    public static function create(): LanguageInflectorFactory
    {
        return self::createForLanguage(Language::ENGLISH);
    }

    public static function createForLanguage(string $language): LanguageInflectorFactory
    {
        return match ($language) {
            Language::ENGLISH => new English\InflectorFactory(),
            Language::FRENCH => new French\InflectorFactory(),
            Language::NORWEGIAN_BOKMAL => new NorwegianBokmal\InflectorFactory(),
            Language::PORTUGUESE => new Portuguese\InflectorFactory(),
            Language::SPANISH => new Spanish\InflectorFactory(),
            Language::TURKISH => new Turkish\InflectorFactory(),
            default => throw new InvalidArgumentException(sprintf(
                'Language "%s" is not supported.',
                $language
            )),
        };
    }
}
