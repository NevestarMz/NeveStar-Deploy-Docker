<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function termos()
    {
        return view('legal.termos');
    }

    public function privacidade()
    {
        return view('legal.privacidade');
    }

     public function cookiesPolicy()
    {
        return view('legal.cookies');
    }

    public function acceptCookies(Request $request)
    {
        $request->validate([
            'preferences' => 'array',
            'preferences.*' => 'in:necessary,analytics,functional, marketing',
        ]);

        // Salvar no backend (ex: DB ou log) se necessário
        session(['cookies_accepted' => $request->preferences]);

        return response()->json(['status' => 'ok']);
    }
}
