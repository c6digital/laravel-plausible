<?php

use C6Digital\Plausible\Facades\Plausible;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

it('correctly sends the HTTP request for an event', function () {
    Http::fake();

    Plausible::event('test');

    Http::assertSent(function (Request $request) {
        return $request['name'] === 'test' &&
            $request['props'] === [];
    });
});
