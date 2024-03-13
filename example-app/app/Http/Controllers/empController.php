<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class empController extends BaseController {
    public function index():View{
    $employees = DB::table('employee')
                    ->join('position', 'employee.positionID', '=', 'position.positionID')
                    ->select('employee.*', 'position.positionName')                
                    ->get();

    return view('emp',['employees'=>$employees]);
    }
}
