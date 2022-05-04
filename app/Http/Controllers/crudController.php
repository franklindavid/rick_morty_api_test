<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Character;

use DB;

use Illuminate\Http\Response;

class crudController extends Controller
{
    public function index(Request $request, $entity){
        $query = DB::table($entity)->paginate(20);  

        $results = [
            'info' => [
                'count'=>$query->total(),
                'pages'=>ceil($query->total()/20)
            ],
            'results'=> $query
        ];
        return response()->json($results)->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);;
    } 

    public function delete(Request $request, $entity){
        dd('delete');
    } 
}
