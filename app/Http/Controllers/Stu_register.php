<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class Stu_register extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add new Student';
//        return view('pages.student');
        return view('pages.student')->with('title', $title);
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
            'fname' => 'required',
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

   /*     $stu = new Students;
        $stu->fname = $request->input('fname');
        $stu->lname = $request->input('lname');
        $stu->dob = $request->input('dob');
        $stu->email = $request->input('email');
        $stu->address = $request->input('address');
        $stu->city = $request->input('city');
        $stu->state = $request->input('state');
        $stu->zip = $request->input('zip');
        $stu->phone = $request->input('phone');
        $stu->rank = $request->input('rank');
        $stu->save();*/
        return 123;
      //  return redirect('/')->with('success', 'Registered Successfully!');
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
        //
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
        //
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
