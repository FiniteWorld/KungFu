<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use DB;

class Parent_register extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return students::where('lname', 'Sharma')->get();
        //return $parent = DB::select('SELECT pfname FROM students where lname= "Sharma"');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.parent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //

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
  //     $students = DB::update('update students set pname= ? where id = ?')
//
//        $stu= students::where('id', $stu[0])->get();
//        return view(pages.b)->with('stu', $stu);
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
        $stu = students::find($id->input('id'));
        $stu->pfname = $request->input('pfname');
        $stu->plname = $request->input('plname');
        $stu->pemail = $request->input('pemail');
        $stu->pcontact = $request->input('pcontact');
        $stu->save();

        return redirect('/')->with('success', 'Parent Registered Successfully!');
    }
    public function update2(){




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
