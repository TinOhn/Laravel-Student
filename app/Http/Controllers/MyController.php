<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home($value='')
    {
    	return view('home');
    }
    public function blog($value='')
    {
    	return view('blog');
    }
    public function room($value='')
    {
    	return view('room');
    }
    public function service($value='')
    {
    	return view('service');
    }
    public function about($value='')
    {
    	return view('about');
    }
    public function contact($value='')
    {
    	return view('contact');
    }
    public function testing($value='')
    {
        $students=array(
            array('name'=>'mgmg','age'=>25),
            array('name'=>'susu','age'=>23)
        );
        return view('testing',['a'=>$students]);
    }
    
}
