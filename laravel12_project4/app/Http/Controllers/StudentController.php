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


    $request->validate([
        'name' => 'required|min:4|max:25',
        'gender' =>'required',
        'email' => 'email|required|unique:students,email',
        'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        
    ]);

    $rand_number = rand(1,20);
    $ext_lower = strtolower($request->photo->extension());
    $filename = $rand_number . time() . "." . $ext_lower;
    $request->photo->move(public_path('images'),$filename);


    $student = new Student;
    $student->name = $request->name;
    $student->gender = $request->gender;
    $student->phone = $request->phone;
    $student->email = $request->email;
    $student->district = $request->district;
    $subjects = $request->subjects;
    
$subjects = implode(',', $subjects);
$student->subjects = $subjects;
$student->photo = 'images/'.$filename;

$student->save();

return redirect('/students')->with('success','Successfully student created');
   
    

    


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    $student = Student::find($id);
    return view('backend.students.show',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $student = Student::find($id);
       return view('backend.students.edit',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'name' => 'required|min:4|max:25',
        'gender' =>'required',
        'email' => 'email|required|unique:students,email'
    ]);


    $student = Student::find($id);
    $student->name = $request->name;
    $student->gender = $request->gender;
    $student->phone = $request->phone;
    $student->email = $request->email;
    $student->district = $request->district;
    $subjects = $request->subjects;
$subjects = implode(',', $subjects);
$student->subjects = $subjects;

$student->save();

return redirect('/students')->with('success','Successfully student Edited');
   
    

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students')->with('success','Successfully Delete');

    }
}
