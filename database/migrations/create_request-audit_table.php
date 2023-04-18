<?php

use Illegal\RequestAudit\Models\RequestRecord;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(RequestRecord::table, function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('method');
            $table->string('user_agent');
            $table->string('ip');
            $table->string('forwarded_ip');
            $table->string('cloudflare_ip');
            $table->json('headers');
            $table->json('content');
            $table->json('body');
            $table->json('server_params');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(RequestRecord::table);
    }
};
