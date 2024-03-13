<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class aController extends BaseController {

    
    public function index():View{
        $rounds = DB::table('round')->get();
        $employees = DB::table('employee')->get();
        $setkpis = DB::table('setkpi')->get();
        return view('db',['rounds'=>$rounds],['employees'=>$employees],['setkpis'=>$setkpis]);
    }
}