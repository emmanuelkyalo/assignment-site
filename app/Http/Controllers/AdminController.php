<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\File;
use Auth;

class AdminController extends Controller
{
    public function viewAssignments(){
        $assignments = Assignment::orderBy('id', 'DESC')->get();
        return view('layouts.client-pages.dashboard', compact('assignments'));
    }
}
