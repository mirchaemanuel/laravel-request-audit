<?php

namespace Illegal\RequestAudit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illegal\RequestAudit\RequestAudit
 */
class RequestAudit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Illegal\RequestAudit\RequestAudit::class;
    }
}
