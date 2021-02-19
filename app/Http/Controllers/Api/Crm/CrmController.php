<?php

namespace App\Http\Controllers\Api\Crm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CrmController extends Controller
{
    public function autologin(Request $request)
    {
//        $response = Http::post('http://example.com/users', [
//            'email' => $request->get('email'),
//            'password' => $request->get('password'),
//        ]);
//
//        return $response->status();
        return response([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ], 200);
    }
}
