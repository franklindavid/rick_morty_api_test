<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class episodesController extends Controller
{
    public function index(Request $request)
    {
        $env = env('API_BASE_URL', 'production');
        $url = $env.'/episode/?page='.$request->page;
        $response = Http::get($url);            
        return $response->body();
    }

    public function show(Request $request,$id)
    {
        $env = env('API_BASE_URL', 'production');
        $url = $env.'/episode/'.$id;
        $response = Http::get($url);            
        return $response->body();
    }
}
