<?php

namespace Illegal\RequestAudit\Http\Resources;

use Illegal\RequestAudit\Models\RequestRecord;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin RequestRecord */
class RequestRecordResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'url'           => $this->url,
            'method'        => $this->method,
            'ip'            => $this->ip,
            'forwarded_ip'  => $this->forwarded_ip,
            'cloudflare_ip' => $this->cloudflare_ip,
            'headers'       => $this->headers,
            'user_agent'    => $this->user_agent,
            'content'       => $this->content,
            'body'          => $this->body,
            'server_params' => $this->server_params,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
        ];
    }
}
