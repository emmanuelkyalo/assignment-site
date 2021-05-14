<?php

namespace App\Http\Controllers;

class AssignmentController extends Controller
{
    public function newAssignmentForm()
    {
        return view('layouts.client-pages.newassignment');
    }


    public function storeNewAssignment(){

    }
}
