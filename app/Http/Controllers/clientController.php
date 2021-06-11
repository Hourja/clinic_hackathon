<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Pet;


class clientController extends Controller
{
    public function index()
    {


        $clients = Client::orderBy('first_name', 'asc')
            ->with('pets')
            ->limit(200)
            ->get();



        return view('clinic.index')->with('clients', $clients);
    }
}
