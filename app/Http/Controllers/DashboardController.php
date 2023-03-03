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
            //
        return view('welcome', [
            'title' => 'Dashboard',
            'dtTickets' => Ticket::all(),
            'dtDivisis' => Divisi::all(),
            'dtBisnisUnits' => BisnisUnit::all(),
            'dtCountTickets' => Ticket::count(),
        ]);
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
        Ticket::create([
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
