<?php
namespace App\Http\Controllers;
use Auth;
use App\Comment;
use Illuminate\Http\Request;
use Redirect;
class CommentsController extends Controller
{
    public function newComment(Request $request)
    {
        $newComment = Comment::create([
            'user_id'=>Auth::user()->id, 'assignment_id'=>$request->input('ass_id'), 'comment' => $request->input('comment'),
        ]);
        if($newComment){
            $notification= logNotification($request->ass_id, "An assignment has a new comment.", "/assignments/" . $request->ass_id, 0);
            $notification= logNotification($request->ass_id, "An assignment has a new comment.", "/assignments/" . $request->ass_id, 1);
            return redirect()->route('assignment-detail', ['id' =>  $request->ass_id])->with('success','The new comment has been successfully posted!') ;
        }else{
            return redirect()->back()->with('error','The comment could not be posted.Try again') ;
        }
    }
}
