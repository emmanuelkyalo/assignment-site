<?php
namespace App\Http\Controllers;

use App\Assignment;
use App\File;
use Auth;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function newAssignmentForm()
    {
        return view('layouts.client-pages.auth-new-assignment');
    }
    public function guestNewAssignment()
    {
        return view('layouts.client-pages.guest-new-assignment');
    }
    public function storeNewAssignment(Request $request)
    {
        if (Auth::check()) {
            $student_email = Auth::user()->email;
            $student_name = Auth::user()->name;
            $phone_number = Auth::user()->phone_number;
        }
        //   dd($request);
        if ($request->has('student_name')) {
            if ($request->filled('student_name')) {
                $student_name = $request->input('student_name');
            } else {
                $student_name = "Not Provided";
            }
        }
        if ($request->has('student_email')) {
            if ($request->filled('student_email')) {
                $student_email = $request->input('student_email');
            } else {
                $student_email = "Not Provided";
            }
        }
        if ($request->has('phone_number')) {
            if ($request->filled('phone_number')) {
                $phone_number = $request->input('phone_number');
            } else {
                $phone_number = "Not Provided";
            }
        }
        if ($request->filled('order_pages')) {
            $pages = $request->input('order_pages');
        } else {
            $pages = "Not Provided";
        }if ($request->filled('instructions')) {
            $instructions = $request->input('instructions');
        } else {
            $instructions = "Not Provided";
        }
        if ($request->filled('deadline')) {
            $deadline = $request->input('deadline');
        } else {
            $deadline = "Not Provided";
        }
        if ($request->filled('education_level')) {
            $education_level = $request->input('education_level');
        } else {
            $education_level = "Not Provided";
        }
        if ($request->filled('referencing_style')) {
            $referencing_style = $request->input('referencing_style');
        } else {
            $referencing_style = "Not Provided";
        }
        if ($request->filled('no_of_references')) {
            $no_of_references = $request->input('no_of_references');
        } else {
            $no_of_references = "Not Provided";
        }
        if ($request->filled('subject_area')) {
            $subject_area = $request->input('subject_area');
        } else {
            $subject_area = "Not Provided";
        }
        if ($request->filled('title')) {
            $title = $request->input('title');
        } else {
            $title = "Not Provided";
        }
        $newAssignment = Assignment::create([
            'userEmail' => $student_email,
            'userName' => $student_name,
            'level' => $education_level,
            'userPhone' => $phone_number,
            'title' => $title,
            'pages' => $pages,
            'instructions' => $instructions,
            'paymentStatus' => 0,
            'completionStatus' => 0,
            'referencing' => $referencing_style,
            'deadline' => $deadline,
            'no_of_references' => $no_of_references,
            'subject_area' => $subject_area,
        ]);

        // dd($newAssignment);
        if ($newAssignment) {
            $latestID = Assignment::where('userEmail', Auth::user()->email)->latest('id')->first();
            if ($latestID) {
                $assignment_id = $latestID->id;
            } else {
                $assignment_id = "";
            }
            if ($request->hasfile('filename')) {

                foreach ($request->file('filename') as $file) {
                    $name = time() . ' ' . $file->getClientOriginalName();
                    $file->move(public_path() . '/client-files/', $name);
                    $newFile = File::create([
                        'file_name' => $name,
                        'assignment_id' => $assignment_id,
                    ]);
                }

            }
        }
        dd("done");
    }
}
