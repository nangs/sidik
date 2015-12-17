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
        $user  = Auth::user();

        if (!Auth::check()) {
    		return view('home1');
    	}

        elseif ($user->role == 'pendaftar') {
            return redirect('/psb/step'.$user->psb->step.'/'.$user->psb->id);
        }

        else {
            return redirect('/psb/admin/');
        }
    }
}
