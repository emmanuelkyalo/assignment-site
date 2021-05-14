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

            return redirect()->route('assignment-detail', ['id' => $request->input('ass_id')]);
        }else{
            return redirect()->back();
        }

    }
}
