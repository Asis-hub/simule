<?php

namespace Egulias\EmailValidator\Exception;

class LocalOrReservedDomain extends InvalidEmail
{
    final public const CODE = 153;
    final public const REASON = 'Local, mDNS or reserved domain (RFC2606, RFC6762)';
}