<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AssignmentController extends Controller
{
    public function newAssignmentForm()
    {
        return view('layouts.client-pages.newassignment');
    }

    public function storeNewAssignment(Request $request )
    {
        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        if ($request->hasfile('filename')) {
            foreach ($request->file('filename') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/image/', $name); // your folder path
                $data[] = $name;
            }
        }

        $Upload_model = new FormMultipleUpload;
        $Upload_model->filename = json_encode($data);
        $Upload_model->save();
        dd('Your images has been upload successfully');
    }
}
