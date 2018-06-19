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
            'mem_type' => 'required',
            'level' => 'required',
            'pdt' => 'required',

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


        $data = Input::get('type');



        //return $Stu_payment;

        /*$att = new attendance();
        $att->id = $request->input('id');
        if(Input::get('Beginner',true)){

        }
        $att->type = $request->input('mem_type');
        $stu_p->level = $request->input('level');
        $stu_p->pdt = $request->input('pdt');
        $stu_p->save();

        //return User::query()->get();
        return redirect('/')->with('success', 'Fee Success!');*/

    }

}
