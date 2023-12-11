<?php

namespace C6Digital\Plausible;

use Illuminate\Support\Facades\Http;

class Plausible
{
    public function __construct(
        protected string $domain,
    ) {}

    public function event(string $name, array $props = []): bool
    {
        return Http::withHeaders([
            'X-Forwarded-For' => request()->ip(),
            'User-Agent' => request()->userAgent(),
        ])
            ->asJson()
            ->post('https://plausible.io/api/event', [
                'name' => $name,
                'domain' => $this->domain,
                'url' => url()->current(),
                'props' => $props,
            ])
            ->successful();
    }
}
