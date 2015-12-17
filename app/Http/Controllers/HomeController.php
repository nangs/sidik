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
    	$roles = \App\User::roleList();
        $user  = Auth::user();

        $data = [
            [
                'name'  => 'Laki - Laki',
                'data'  => [1,2,3] // SD, SMP, SMA
            ], [
                'name'  => 'Perempuan',
                'data'  => [1,2,3] // SD, SMP, SMA
            ], [
                'name'  => 'Total',
                'data'  => [1,2,3] // SD, SMP, SMA
            ], 
        ];

        if (!Auth::check()) {
    		return view('home1', ['data' => $data]);
    	}

        elseif ($user->role == 'pendaftar') {
            return redirect('/psb/step'.$user->psb->step.'/'.$user->psb->id);
        }

        else {
            return redirect('/psb/admin/');
        }
    }
}
