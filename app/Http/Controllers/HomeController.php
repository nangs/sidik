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
    	if (!Auth::check()) {
    		return view('home1');
    	}

    	$user = Auth::user();

    	if ($user->role == 'pendaftar') {
    		return redirect('/psb/show/'.$user->psb->id);
    	}

    	elseif ($user->role == 'admin') {
    		return redirect('/psb/admin');
    	}

        else {
            return "Anda bukan siapa - siapa.";
        }
    }
}
