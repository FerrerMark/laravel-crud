<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')->get();
        return view('/students', ['students' => $students]);
    }

    public function addStudents(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
        ]);

        DB::table('students')->insert([
            'name' => $request->name,
            'age' => $request->age,
        ]);

        return redirect('/students')->with('success', 'Student added!');
    }

    public function deleteStudents($id)
    {
        $student = DB::table('students')->where('id', $id)->first();

        if ($student) {
            DB::table('students')->where('id', $id)->delete();
            return redirect('/students')->with('success', 'Student deleted successfully!');
        }

        return redirect('/students')->with('error', 'Student not found!');
    }

    public function updateStudent(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
        ]);

        DB::table('students')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'age' => $request->age,
            ]);

        return redirect('/students')->with('success', 'Student updated successfully!');
    }

    public function editStudent($id)
    {
        $student = DB::table('students')->where('id', $id)->first();

        if (!$student) {
            return redirect('/students')->with('error', 'Student not found!');
        }

        return view('updateStudents', ['student' => $student]);
    }

    public function searchStudents(Request $request)
    {
        $search = $request->input('search');

        $students = DB::table('students')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->get();

        return view('students', compact('students', 'search'));
    }



}