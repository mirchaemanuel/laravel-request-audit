<?php

namespace Illegal\RequestAudit\Http\Controllers;

use Illegal\RequestAudit\Http\Resources\RequestRecordResource;
use Illegal\RequestAudit\Models\RequestRecord;
use Illuminate\Http\Request;

class RequestRecordController
{
    public function index() : mixed
    {
        return RequestRecordResource::collection(RequestRecord::all());
    }
}
