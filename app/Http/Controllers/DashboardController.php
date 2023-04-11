<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Divisi;
use App\Models\BisnisUnit;

class DashboardController extends Controller
{
    public function DashboardAdmin()
    {
        
        $dataTicket = Ticket::all();
        //dd($dataTicket);


        return view('welcome', [
            'title' => 'Dashboard',
            //'dtTickets' => Ticket::all(),
            'dtDivisis' => Divisi::all(),
            'dtBisnisUnits' => BisnisUnit::all(),
            'dtCountTickets' => Ticket::count(),
        ], compact('dataTicket'));
    }

    public function DashboardMember()
    {
        return view('WelcomeMember', [
            'title' => 'Dashboard'
        ]);
    }

    public function Create()
    {
        return view('layouts.create', [
            'title' => 'Create Ticket'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Ticket::create($request->all());
        
    	return redirect('/')->with('Success, Data Berhasil Di Tambah');
    }

    public function Edit($id)
    {
        
        $dataTicket = Ticket::Find($id);

        return view('Dashboard.edit', compact('dataTicket'));
    }

    public function Update(Request $request, $id)
    {
       try {
           //code...
           $ticket = Ticket::find($id);
           $ticket->update($request->all());
       } catch (Exception $ticket) {
           return $ticket->getMessage();
           
       }
        
       
       dd($ticket);
        //return redirect()->route('index.dashboard')->with('Success, Data Berhasil Di Update');
    }

    public function Destroy($id)
    {
        $ticket = Ticket::where('id', $id)->firstorfail()->delete();

        return redirect('/');

    }
}
