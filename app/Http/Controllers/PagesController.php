<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome!';
        return view('pages.main')->with('title', $title);
    }
    public function stu_reg(){
        $title = 'Student Registration';
        return view('pages.student')->with('title', $title);
    }
    public function par_reg(){
        $title = 'Parent Registration';
        return view('pages.parent')->with('title', $title);
    }
    public function promote(){
        $title='Promote Student';
        return view('pages.promote')->with('title', $title);
    }

    public function search(){
        $title='Search';
        return view('pages.search')->with('title', $title);
    }
    public function fee(){
        $title='Fees';
        return view('pages.fees')->with('title', $title);
    }
    public function product(){
        $title='Products';
        return view('pages.product')->with('title', $title);
    }
}
