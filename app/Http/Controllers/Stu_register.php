<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\students;

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
        $stu->dob = $request->input('dob');
        $stu->email = $request->input('email');
        $stu->address = $request->input('address');
        $stu->city = $request->input('city');
        $stu->state = $request->input('state');
        $stu->zip = $request->input('zip');
        $stu->phone = $request->input('phone');
        $stu->rank = $request->input('rank');
        $stu->save();

        //return User::query()->get();
        return redirect('/')->with('success', 'Registered Successfully!');

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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $stu -> id = $request->$id;
//        $stu->rank = $request->rank;

//        $stu = students::find($id->input('id'));
//        $stu->rank = $request->input('rank');
//       /* $stu->pfname = $request->input('pfname');
//        $stu->plname = $request->input('plname');
//        $stu->pemail = $request->input('pemail');
//        $stu->pcontact = $request->input('pcontact');*/
//        $stu->save();

        //return User::query()->get();
        $rank = $request->input('rank');
        DB::update('update students set rank = ? where id = ?', [$rank, $id]);
        echo "Record update successs";
        //return redirect('/')->with('success', 'Promoted Successfully!');

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
