<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class locationsController extends Controller
{
    public function index(Request $request)
    {
        $env = env('API_BASE_URL', 'production');
        $url = $env.'/location/?page='.$request->page;
        $response = Http::get($url);            
        return $response->body();
    }

    public function show(Request $request,$id)
    {
        $env = env('API_BASE_URL', 'production');
        $url = $env.'/location/'.$id;
        $response = Http::get($url);            
        return $response->body();
    }
}