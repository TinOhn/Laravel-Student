<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home($value='')
    {
    	 return view('welcome');
    }
    public function t($value='')
    {
    	return "View Page";
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
