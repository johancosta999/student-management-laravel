<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create_student(){
        return view("create_student");
    }

    public function store_student(Request $request){
       try{
            Student::query()->create([
                'reg_no'=> $request->reg_no,
                'name' => $request->name,
                'address' => $request->address,
                'birth_date' => $request->birth_date,
                'phone_number' =>  $request->phone_number,
                'weight' => $request->weight,
            ]);

            return redirect()->route('student.create');
        } catch (\Exception $e) {
            return $e;
       }
    }
}
