<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('backend.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   echo "hello you are here";
    //   dd($request);
    $student = new Student;
    $student->name = $request->name;
    $student->gender = $request->gender;
    $student->phone = $request->phone;
    $student->email = $request->email;
    $student->district = $request->district;
    $student->subjects =json_encode($request->subjects);
    $student->save();

    $request->validate([
        'name' => 'required|min:4|max:25',
        'gender' =>'required',
        'email' => 'email|required|unique:students,email'
    ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
