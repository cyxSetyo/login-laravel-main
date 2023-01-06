<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function Ticket()
    {
        return view('welcome', [
            'title' => 'dashboard'
        ]);
    }

    //ticket
    public function postTicket(Request $request){
        dd($request->all());
    }
}
