<?php

namespace Illegal\RequestAudit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
