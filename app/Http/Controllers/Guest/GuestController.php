<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //index
    public function index(){
        return view('guest.index');
    }

    public function services() {
        return view('guest.services');
    }

    public function looking_for_pr(){
        return view('guest.looking');
    }
}
