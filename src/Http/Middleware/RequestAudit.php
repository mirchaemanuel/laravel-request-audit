<?php

namespace Illegal\RequestAudit\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestAudit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica il contenuto della richiesta
        if ($this->shouldAuditRequest($request)) {
            // Registra le informazioni relative alla richiesta
            $this->auditRequest($request);
        }

        return $next($request);
    }

    /**
     * Whether the request should be audited.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function shouldAuditRequest(Request $request)
    {
        return true;
    }

    /**
     * Record the request information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function auditRequest(Request $request)
    {
        /**
         * Record the request information.
         */
        Log::info('RequestAudit:', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'ip' => $request->ip(),
            'forwarded_ip' => $request->header('X-Forwarded-For'),
            'cloudflare_ip' => $request->header('CF-Connecting-IP'),
            'headers' => $request->header(),
            'user_agent' => $request->header('User-Agent'),
            'content' => $request->getContent(),
            'body' => $request->all(),
            'server_params' => $request->server(),
        ]);
    }
}
