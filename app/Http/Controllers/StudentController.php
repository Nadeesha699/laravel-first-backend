<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function loadStudentPage()
    {
        $student = new Student();
        $all_student = $student->all();
        return view('view-student', compact('all_student'));
    }

    public function loadAddStudentForm()
    {
        return view('add-student');
    }

    public function loadEditStudentForm($id)
    {
        $student = new Student();
        $data = $student->find($id);
        return view('edit-student', compact('data'));
    }

    public function deleteStudent($id)
    {
        $student = new Student();
        $student->where('id', $id)->delete();
        return redirect('/');
    }

    public function addStudent(Request $request)
    {
        $student = new Student();
        $student->student_name = $request->student_name;
        $student->student_age = $request->student_age;
        $student->student_address = $request->student_address;
        $student->save();

        return redirect('/');
    }

    public function editStudent(Request $request)
    {
        $student = new Student();
        $student->where('id', $request->id)->update([
            'student_name' => $request->student_name,
            'student_age' => $request->student_age,
            'student_address' =>  $request->student_address
        ]);
        return redirect('/');
    }
}
