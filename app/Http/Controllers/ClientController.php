<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Comment;
use App\File;
class ClientController extends Controller
{
    public function dashboard()
    {
        $assignments = Assignment::orderBy('id', 'DESC')->get();
        return view('layouts.client-pages.dashboard', compact('assignments'));
    }
    public function assignmentDetails($id){
        $assignment=Assignment::find($id);
        $files=File::where('assignment_id',$id)->where('file_type',0)->get();
        $solutions=File::where('assignment_id',$id)->where('file_type',1)->get();
        $comments=Comment::where('assignment_id',$id)->orderBy('id','DESC')->get();

        return view('layouts.client-pages.assignment-details',compact('assignment','files','solutions','comments'));

    }
}
