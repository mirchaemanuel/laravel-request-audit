<?php

namespace Illegal\RequestAudit\Database\Factories;

use Illegal\RequestAudit\Models\RequestAudit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RequestAuditFactory extends Factory
{
    protected $model = RequestAudit::class;

    public function definition()
    {
        return [
            'url' => $this->faker->url(),
            'method' => $this->faker->word(),
            'ip' => $this->faker->ipv4(),
            'forwarded_ip' => $this->faker->ipv4(),
            'cloudflare_ip' => $this->faker->ipv4(),
            'headers' => Carbon::now(),
            'user_agent' => $this->faker->word(),
            'content' => Carbon::now(),
            'body' => Carbon::now(),
            'server_params' => Carbon::now(),
        ];
    }
}
