<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctors;

class doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=doctors::all();
    return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required'
        ]);
        doctors::create($request->all());
        return redirect()->route('student.index')->with('success','data inserted !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students=doctors::findOrFail($id);
        return view('student.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students=doctors::findOrFail($id);
return view('student.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students=doctors::findOrFail($id);
         $request->validate([
            'fname'=>'required',
            'lname'=>'required'
        ]);
        $students->update([
'fname'=>$request->fname,
'lname'=>$request->lname,
        ]);
        return redirect()->route('student.index')->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $students=doctors::findOrFail($id);
       $students->delete();
        return redirect()->route('student.index')->with('success','delete successfuly');
    }
}
