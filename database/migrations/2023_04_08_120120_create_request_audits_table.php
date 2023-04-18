<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('request_audits', function (Blueprint $table) {
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

    public function down()
    {
        Schema::dropIfExists('request_audits');
    }
};
