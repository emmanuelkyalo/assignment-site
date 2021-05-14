<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Comment;
class ClientController extends Controller
{
    public function dashboard()
    {
        $assignments = Assignment::orderBy('id', 'DESC')->get();
        return view('layouts.client-pages.dashboard', compact('assignments'));
    }
    public function assignmentDetails($id){
        $assignment=Assignment::find($id);
        $comments=Comment::where('assignment_id',$id)->orderBy('id','DESC')->get();

        return view('layouts.client-pages.assignment-details',compact('assignment','comments'));

    }
}
