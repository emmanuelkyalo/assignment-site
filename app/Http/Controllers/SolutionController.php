<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use App\Solution;
use App\Assignment;
class SolutionController extends Controller
{
    public function submitSolution(Request $request)
    {


            foreach ($request->file('filename') as $file) {
                //dd($file);
                $name = time() . ' ' . $file->getClientOriginalName();
                $file->move(public_path() . '/solutions/', $name);
                $newFile = File::create([
                    'file_name' => $name,
                    'assignment_id' => $request->ass_id,
                    'file_type' => 1,
                ]);


            $newFile = Solution::create([
                'submission_status' => 1,
                'assignment_id' =>$request->ass_id,
                'payment_status' => 1,
            ]);
            if($newFile){
                $assignment=Assignment::where('id',$request->ass_id)->first();
                $assignment->completionStatus=1;
                $assignment->save();
            }


        }
        return redirect()->route('assignment-detail', ['id' => $request->ass_id]);
    }
}
