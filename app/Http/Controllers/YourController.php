<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class YourController extends Controller
{
    public function show()
    {   
        $data = FormData::paginate(10);
        return view('table1', ['data' => $data]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required',
            'fathername' => 'required|string|max:255',
            'mothername' => 'required|string|max:255',
            'brothername' => 'string|max:255|nullable',
            'sistername' => 'string|max:255|nullable',
            'dob' => 'required|date',
            'about' => 'string|max:1000|nullable',
        ]);

        FormData::create($request->all());   

        return redirect()->route('form')->with('success', 'Data submitted successfully.');
    }
}
