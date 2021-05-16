<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\File;
use Auth;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function submitSolution(Request $request){
        dd($request);
        if ($request->hasfile('filename')) {

            foreach ($request->file('filename') as $file) {
                $name = time() . ' ' . $file->getClientOriginalName();
                $file->move(public_path() . '/client-files/', $name);
                $newFile = File::create([
                    'file_name' => $name,
                    'assignment_id' => $request->ass_id,
                    'file_type'=>1
                ]);
            }
            $notification= logNotification($request->ass_id, "An assignment has a new comment.", "/assignments/" . $request->ass_id, 0);

        }
    }
}
