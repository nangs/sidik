<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Psb;

class HomeController extends Controller
{
    public function getIndex()
    {
        $user  = Auth::user();

        if (!Auth::check()) {
    		return view('home1');
    	}

        elseif ($user->role == 'pendaftar') {
            if ($user->psb) {
                return redirect('/psb/step'.$user->psb->step.'/'.$user->psb->id);
            } else {
                return 'Anda tidak mendaftarkan siapa - siapa';
            }
        }

        else {
            return redirect('/psb/admin/');
        }
    }
}
