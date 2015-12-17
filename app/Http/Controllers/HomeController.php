<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function getIndex()
    {
    	$roles = \App\User::roleList();

        if (!Auth::check()) {
    		return view('home1');
    	}

        else {
            return redirect('/psb/admin/');
        }
    }
}
