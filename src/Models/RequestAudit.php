<?php

namespace Illegal\RequestAudit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAudit extends Model
{
    use HasFactory;

    protected $casts = [
        'headers' => 'array',
        'content' => 'array',
        'body' => 'array',
        'server_params' => 'array',
    ];
}
