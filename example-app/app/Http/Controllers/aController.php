<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\Evaluation;
use Illuminate\View\View;

class aController extends Controller{
    public function index(){
        $rounds = DB::table('round')->get();
        $employees = DB::table('employee')->get();
        $setkpis = DB::table('setkpi')->get();
        return view('db',['rounds'=>$rounds],['employees'=>$employees],['setkpis'=>$setkpis]);
    }
    public function insert(Request $request){
        DB::insert('insert into evaluation (
                    idevaluation, idassess,idassessed,idround,idset
                    ) values (?,?,?,?,?)' ,[
                        NULL,
                        $request->empID1,
                        $request->empID2,
                        $request->idround,
                        $request->idset,
                    ]);
            //dd($request->idset);
        $selectionkpis = DB::table('selectionkpi')
                        ->join('criteriakpi', 'selectionkpi.idcriteriakpi', '=', 'criteriakpi.crID')
                        ->join('criterion', 'criterion.idcriteriakpi' ,'=', 'selectionkpi.idcriteriakpi')
                        ->select('selectionkpi.*', 'criteriakpi.title' , 'criterion.max','criterion.min','criterion.grade')
                        ->where('selectionkpi.idset', '=', $request->idset)                
                        ->get();
        $criteriakpis = DB::table('criteriakpi')
                        ->get('criteriakpi.title');
    return view('env',['selectionkpis'=>$selectionkpis],
                    ['criteriakpis'=>$criteriakpis]);
    }
}