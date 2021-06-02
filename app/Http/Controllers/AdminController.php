<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\File;
use Auth;
use Mail;
class AdminController extends Controller
{
    public function viewAssignments(){
        $assignments = Assignment::orderBy('id', 'DESC')->get();

        return view('layouts\admin-pages\dashboard' ,compact('assignments'));
    }

    public function mail(){
        $user = User::find(1)->toArray();

    	Mail::send('mail', $user, function($message) use ($user) {
	        $message->to($user['email']);
	        $message->subject('Welcome Mail');
    	});

    	dd('Mail Send Successfully');
    }
}
