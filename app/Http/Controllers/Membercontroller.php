<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Membercontroller extends Controller
{
    //

  function index(){

    $getdata = \App\Models\Members::find(1)->companydata;

        return view('members.index',compact('getdata'));
       }
}
