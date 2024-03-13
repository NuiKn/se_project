<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class teamController extends BaseController {
    public function index():View{
    $saleteams = DB::table('saleteam')->get();
    return view('team',['saleteams'=>$saleteams]);
    }
}
