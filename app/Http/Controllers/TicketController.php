<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{


    //ticket
    public function postTicket(Request $request)
    {
        //dd($request->all());
        
       $dtTicket =  Ticket::create([
            'name' => $request->name,
            'divisi'=> $request->divisi,
            'bisnisunit' => $request->bisnisunit,
            'extention' => $request->extention,
            'alamatip' =>$request->alamatip,
            'jenis' => $request->jenis,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);
        
    	return redirect('/');
    }
}
