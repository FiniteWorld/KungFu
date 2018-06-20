<?php

namespace App\Http\Controllers;


use App\students;
use Illuminate\Http\Request;
use App\Stu_payment;
use App\attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class FeesController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'purchase_type' => 'required',
            'purchase_amount' => 'required',

        ]);
        $stu_p = new Stu_payment();
        $stu_p->id = $request->input('id');
        $stu_p->purchase_type = $request->input('purchase_type');
        $stu_p->purchase_amount = $request->input('purchase_amount');
        $stu_p->save();

        return redirect('/')->with('success', 'Payment Successful!');

    }

    public function store_Parent(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'pfname' => 'required',
            'plname' => 'required',
            'pemail' => 'required',
            'relation' => 'required',
            'pcontact' => 'required',

        ]);
        $stu_p = new Stu_payment();
        $stu_p->id = $request->input('id');
        $stu_p->mem_type = $request->input('mem_type');
        $stu_p->level = $request->input('level');
        $stu_p->pdt = $request->input('pdt');
        $stu_p->save();

        //return User::query()->get();
        return redirect('/')->with('success', 'Fee Success!');


    }

    public function attendance(Request $request)
    {

        $this->validate($request, [
            'id' => 'required',

        ]);

        $att= new attendance();
        $att->id = $request->input('id');
        if($request->input('type1') == 'P'){
            $att->beginner = $request->input('type1');
        }else if($request->input('type2') == 'P') {
            $att->intermediate = $request->input('type2');
        }else if($request->input('type3') == 'P'){
            $att->expert = $request->input('type3');

        }
        $att->date = \Carbon\Carbon::now()->toDateString();
        $att->save();

        return redirect('/attendance')->with('success', 'Attendance updated!!!');

    }

    public function update_rank(Request $request)
    {

        $this->validate($request, [
            'id' => 'required',
            'rank' => 'required'
        ]);

        $update_rank = array(
            'rank' => $request->input('rank'),

        );

        DB::table('students')
            ->where('id', $request->get('id'))
            ->update($update_rank);

        return redirect('/')->with('success', 'The student rank has been successfully updated!!');

    }


}
