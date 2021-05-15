<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\File;
use Auth;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function submitSolution(Request $request){
        if ($request->hasfile('filename')) {

            foreach ($request->file('filename') as $file) {
                $name = time() . ' ' . $file->getClientOriginalName();
                $file->move(public_path() . '/client-files/', $name);
                $newFile = File::create([
                    'file_name' => $name,
                    'assignment_id' => $assignment_id,
                    'file_type'=>1
                ]);
            }

        }
    }
}
