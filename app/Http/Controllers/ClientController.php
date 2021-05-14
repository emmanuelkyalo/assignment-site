<?php

namespace App\Http\Controllers;

use App\Assignment;

class ClientController extends Controller
{
    public function dashboard()
    {
        $assignments = Assignment::orderBy('id', 'DESC')->get();
        return view('layouts.client-pages.dashboard', compact('assignments'));
    }
    public function assignmentDetails($id){

    }
}
