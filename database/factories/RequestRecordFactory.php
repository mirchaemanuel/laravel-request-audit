<?php

namespace Illegal\RequestAudit\Database\Factories;

use Illegal\RequestAudit\Models\RequestAudit;
use Illegal\RequestAudit\Models\RequestRecord;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RequestRecordFactory extends Factory
{
    protected $model = RequestRecord::class;

    public function definition(): array
    {
        return [
            'url'           => $this->faker->url(),
            'method'        => $this->faker->word(),
            'ip'            => $this->faker->ipv4(),
            'forwarded_ip'  => $this->faker->ipv4(),
            'cloudflare_ip' => $this->faker->ipv4(),
            'headers'       => Carbon::now(),
            'user_agent'    => $this->faker->word(),
            'content'       => Carbon::now(),
            'body'          => Carbon::now(),
            'server_params' => Carbon::now(),
        ];
    }
}
