<?php

namespace Illegal\RequestAudit\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $url
 * @property string $method
 * @property string $ip
 * @property string $forwarded_ip
 * @property string $cloudflare_ip
 * @property array $headers
 * @property string $user_agent
 * @property array $content
 * @property array $body
 * @property array $server_params
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @method static RequestRecord create(array $attributes)
 */
class RequestRecord extends Model
{
    use HasFactory;

    public const table = 'request_audit__requests';

    protected $table = self::table;

    protected $guarded = [];

    protected $casts = [
        'headers' => 'array',
        'content' => 'array',
        'body' => 'array',
        'server_params' => 'array',
    ];
}
