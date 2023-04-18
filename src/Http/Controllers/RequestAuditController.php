<?php

namespace Illegal\RequestAudit\Http\Controllers;

use Illegal\RequestAudit\Http\Resources\RequestAuditResource;
use Illegal\RequestAudit\Models\RequestAudit;
use Illuminate\Http\Request;

class RequestAuditController
{
    public function index()
    {
        return RequestAuditResource::collection(RequestAudit::all());
    }

    public function store(Request $request)
    {
    }

    public function show(RequestAudit $requestAudit)
    {
    }

    public function update(Request $request, RequestAudit $requestAudit)
    {
    }

    public function destroy(RequestAudit $requestAudit)
    {
    }
}
