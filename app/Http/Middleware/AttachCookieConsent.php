<?php

// app/Http/Middleware/AttachCookieConsent.php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use App\Models\CookieConsent;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Cookie;

class AttachCookieConsent {
    public function handle(Request $request, Closure $next) {
        $cookieId = $request->cookie('nevestar_cookie_id');

        if (! $cookieId) {
            $cookieId = Str::uuid()->toString();
        }

        // tenta carregar do BD
        $consent = CookieConsent::where('cookie_id', $cookieId)->latest()->first();
        $request->attributes->set('cookie_consent', $consent?->consent ?? null);

        $response = $next($request);

        // garante que o cookie_id existe no browser (1 ano)
        if (! $request->hasCookie('nevestar_cookie_id')) {
            $response->headers->setCookie(
                Cookie::create('nevestar_cookie_id', $cookieId, 60*24*365)
            );
        }

        return $response;
    }
}

