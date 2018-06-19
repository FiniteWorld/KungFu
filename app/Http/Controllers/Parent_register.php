<?php

namespace App\Http\Controllers;

use App\Parents;
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
        return view('pages.parents');
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
            'pfname' => 'required',
            'plname' => 'required',
            'pemail' => 'required',
            'pcontact' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'dob' => 'required',
            'zip' => 'required',
            'rank' => 'required',

        ]);
        $p = new students();
        $p->pfname = $request->input('pfname');
        $p->plname = $request->input('plname');
        $p->pemail = $request->input('pemail');
        $p->dob = $request->input('dob');
        $p->address = $request->input('address');
        $p->city = $request->input('city');
        $p->state = $request->input('state');
        $p->zip = $request->input('zip');
        $p->pcontact = $request->input('pcontact');
        $p->rank = $request->input('rank');
        $p->save();
        //return User::query()->get();
        return redirect('/')->with('success', 'Parent successfully added as a student!!');
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
//        return view(pages.parents)->with('stu', $stu);
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

    public function update2(Request $request)
    {

        $this->validate($request, [
            'id' => 'required',
            'pfname' => 'required',
            'plname' => 'required',
            'pemail' => 'required',
            'relation' => 'required',
            'pcontact' => 'required',

        ]);

        $update_Parent = array(
            'pfname' => $request->input('pfname'),
            'plname' => $request->input('plname'),
            'pemail' => $request->input('pemail'),
            'relation' => $request->input('relation'),
            'pcontact' => $request->input('pcontact'),
        );

        DB::table('students')
            ->where('id', $request->get('id'))
            ->update($update_Parent);

        return redirect('/')->with('success', 'You added the detail of parent and student correctly!!!');

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
