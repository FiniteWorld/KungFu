<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\students;
use Illuminate\Support\Facades\Input;

class Stu_register extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return students::all();
        $stu = students::all();
        return view('pages.promote')->with('stu', $stu);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'rank' => 'required',
        ]);
        $stu = new students;
        $stu->name = $request->input('name');
        $stu->lname = $request->input('lname');

        $d = \Carbon\Carbon::parse($request->input('dob'));
        $now = \Carbon\Carbon::now();
        $age = $now->diffInYears($d);
        if ($age < 18) {
            //redirect()->route('Parent_register@create')->with('message', 'You need to register the details of parent as well!!');
            //redirect()->action('Parent_register@create');
            $stu->dob = $request->input('dob');
            $stu->email = $request->input('email');
            $stu->address = $request->input('address');
            $stu->city = $request->input('city');
            $stu->state = $request->input('state');
            $stu->zip = $request->input('zip');
            $stu->phone = $request->input('phone');
            $stu->rank = $request->input('rank');
            $stu->save();
            return redirect('/registerParent/create')->with('success', 'You need to register the details of one parent as well!!');
        } else {
            $stu->dob = $request->input('dob');
            $stu->email = $request->input('email');
            $stu->address = $request->input('address');
            $stu->city = $request->input('city');
            $stu->state = $request->input('state');
            $stu->zip = $request->input('zip');
            $stu->phone = $request->input('phone');
            $stu->rank = $request->input('rank');
            $stu->save();
            return redirect('/')->with('success', 'Student Registered Successfully!');
        }
        //return $age;
        // $stu->save();
        //return redirect('/')->with('success', 'You added the detail of parent and student correctly!!');//return User::query()->get();
        //return redirect('/')->with('success', 'Registered Successfully!');
        // return $age;

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stu = students::find($id);
        return $stu;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
