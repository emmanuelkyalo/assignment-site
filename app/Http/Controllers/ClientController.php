<?php
namespace App\Http\Controllers;

use App\Assignment;
use App\Comment;
use App\File;
use App\Notification;
use Auth;
class ClientController extends Controller
{
    public function notifications()
    {
        if (Auth::user()->is_admin == 1) {
            $notifications = Notification::where('target', 1)->orderBy('read_status','ASC')->orderBy('created_at','DESC')->get();
        }
        if (Auth::user()->is_admin == 0) {
            $notifications = Notification::where('target', 0)->orderBy('read_status','ASC')->orderBy('created_at','DESC')->get();
        }
        return view('home', compact('notifications'));
    }

    public function openNotification($id,$description){
        $assignment = Assignment::find($id);
        $files = File::where('assignment_id', $id)->where('file_type', 0)->get();
        $solutions = File::where('assignment_id', $id)->where('file_type', 1)->get();
        $comments = Comment::where('assignment_id', $id)->orderBy('id', 'DESC')->get();
        if (Auth::user()->is_admin == 1) {

            $notification = Notification::where('target', 1)->where('description',$description)->where('assignment_id', $id)->first();

            $notification->read_status = 1;
            $notification -> save();
        }
        if (Auth::user()->is_admin == 0) {
            $notification = Notification::where('target', 0)->where('description',$description)->where('assignment_id', $id)->first();
            $notification->read_status = 1;
            $notification -> save();
        }
        return view('layouts.client-pages.assignment-details', compact('assignment', 'files', 'solutions', 'comments'));
    }
    public function dashboard()
    {

        $assignments = Assignment::orderBy('id', 'DESC')->get();
        return view('layouts.client-pages.dashboard', compact('assignments', 'notifications'));
    }
    public function assignmentDetails($id)
    {
        $assignment = Assignment::find($id);
        $files = File::where('assignment_id', $id)->where('file_type', 0)->get();
        $solutions = File::where('assignment_id', $id)->where('file_type', 1)->get();
        $comments = Comment::where('assignment_id', $id)->orderBy('id', 'DESC')->get();

        return view('layouts.client-pages.assignment-details', compact('assignment', 'files', 'solutions', 'comments'));
    }
}
