<?php

namespace Faker\Guesser;

use Faker\Provider\Base;

class Name
{
    public function __construct(protected \Faker\Generator $generator)
    {
    }

    /**
     * @param string   $name
     * @param int|null $size Length of field, if known
     *
     * @return callable|null
     */
    public function guessFormat($name, $size = null)
    {
        $name = Base::toLower($name);
        $generator = $this->generator;

        if (preg_match('/^is[_A-Z]/', $name)) {
            return static fn() => $generator->boolean;
        }

        if (preg_match('/(_a|A)t$/', $name)) {
            return static fn() => $generator->dateTime;
        }

        switch (str_replace('_', '', $name)) {
            case 'firstname':
                return static fn() => $generator->firstName;

            case 'lastname':
                return static fn() => $generator->lastName;

            case 'username':
            case 'login':
                return static fn() => $generator->userName;

            case 'email':
            case 'emailaddress':
                return static fn() => $generator->email;

            case 'phonenumber':
            case 'phone':
            case 'telephone':
            case 'telnumber':
                return static fn() => $generator->phoneNumber;

            case 'address':
                return static fn() => $generator->address;

            case 'city':
            case 'town':
                return static fn() => $generator->city;

            case 'streetaddress':
                return static fn() => $generator->streetAddress;

            case 'postcode':
            case 'zipcode':
                return static fn() => $generator->postcode;

            case 'state':
                return static fn() => $generator->state;

            case 'county':
                if ($this->generator->locale == 'en_US') {
                    return static fn() => sprintf('%s County', $generator->city);
                }

                return static fn() => $generator->state;

            case 'country':
                return match ($size) {
                    2 => static fn() => $generator->countryCode,
                    3 => static fn() => $generator->countryISOAlpha3,
                    5, 6 => static fn() => $generator->locale,
                    default => static fn() => $generator->country,
                };

                break;

            case 'locale':
                return static fn() => $generator->locale;

            case 'currency':
            case 'currencycode':
                return static fn() => $generator->currencyCode;

            case 'url':
            case 'website':
                return static fn() => $generator->url;

            case 'company':
            case 'companyname':
            case 'employer':
                return static fn() => $generator->company;

            case 'title':
                if ($size !== null && $size <= 10) {
                    return static fn() => $generator->title;
                }

                return static fn() => $generator->sentence;

            case 'body':
            case 'summary':
            case 'article':
            case 'description':
                return static fn() => $generator->text;
        }

        return null;
    }
}
