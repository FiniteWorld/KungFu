<?php

namespace App\Http\Controllers;

use App\attendance;
use DB;
use App\students;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome!';
        return view('pages.main')->with('title', $title);
    }

    /*  public function stu_reg(){
          $title = 'Student Registration';
          return view('pages.student')->with('title', $title);
      }*/
    public function par_reg()
    {
        $title = 'Parent Registration';
        return view('pages.p_student')->with('title', $title);
    }

    public function promote()
    {
        $title = 'Promote Student';
        return view('pages.promote')->with('title', $title);
    }

    public function search()
    {
        $title = 'Search';
        return view('pages.search')->with('title', $title);
    }

    public function attendance()
    {
        $title = 'Attendance';
        return view('pages.attendance')->with('title', $title);
    }

    public function fee()
    {
        $title = 'Fees';
        return view('pages.fees')->with('title', $title);
    }

    public function product()
    {
        $title = 'Products';
        return view('pages.product')->with('title', $title);
    }

    public function q(Request $request)
    {
        $stu = students::all();
        $att=attendance::all();
        $choice = $request->input('category');

        if ($choice == 'All') {
            $stu = DB::select('select * from students');
            return view('pages.search2')->with('stu',$stu);
        }else if($choice == 'A'){

           // $att = DB::table('attendances')->get();
             $att = DB::select('select * from attendances');

             return view('pages.att_record')->with('att', $att);

        }else if($choice == 'B'){
            $att = DB::table('students')
                ->join('stu_payments', 'students.id', '=', 'stu_payments.id')
                ->select( 'students.name', 'stu_payments.*')
                ->where('purchase_type','Beginner')
                ->get();
            return view('pages.record_b')->with('att', $att);

        }else if($choice == 'I'){
            $att = DB::table('students')
                ->join('stu_payments', 'students.id', '=', 'stu_payments.id')
                ->select( 'students.name', 'stu_payments.*')
                ->where('purchase_type','Intermediate')
                ->get();
            return view('pages.record_i')->with('att', $att);

        }else if($choice == 'E'){
            $att = DB::table('students')
                ->join('stu_payments', 'students.id', '=', 'stu_payments.id')
                ->select( 'students.name', 'stu_payments.*')
                ->where('purchase_type','Expert')
                ->get();
            return view('pages.record_e')->with('att', $att);

        }
        /*

$query = DB::table('attendance')
    ->select(DB::raw('*'))
    ->where('id', '=', ?)
                     ->get();

    $query = DB::table('attendance')
        ->select(DB::raw('*'))
        ->where('date', '=', ?)->get();

    $query = DB::table('students')
        ->select(DB::raw('*'))
        ->where('belt', '=', ?)
					->get();

    $query = DB::table('students')
        ->join('stu_payments', 'id', '=', 'Stu_payments.id')
        ->select('students.id', 'students.name', 'Stu_payments.*')
        ->get();

    $query = DB::table('Stu_payments')
        ->select(DB::raw('*'))
        ->where('fee_date' between '20-jan-2018' and '30-jan-2018')->get();*/
    }

}
