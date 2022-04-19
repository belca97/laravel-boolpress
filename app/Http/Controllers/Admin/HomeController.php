<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){

        $endOfCurrentMonth = Carbon::now()->endOfMonth()->endOfDay();
        $now = Carbon::now();

        //funzione carbon per calcolare quanti giorni mancano alla fine del mese
        $diffInDays = $endOfCurrentMonth->diffInDays($now);


        $user= Auth::user();

        
        return view('admin.home', compact('user', 'diffInDays'));
    }
}
