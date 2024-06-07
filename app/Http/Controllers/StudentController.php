<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function studentlist(Request $request)
    {
        $list =  Student::get();
        return view('list', compact('list'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'MiddleName' => 'required',
            'Gender' => 'required',
            'BirthDate' => 'required',
            'CivilStatus' => 'required',
            'ContactNo' => 'required',
            'Nationality' => 'required',
            'Occupation' => 'required',
        ], [
            'FirstName.required' => 'First Name  is required.',
            'LastName.required' => 'Last Name  is required.',
            'MiddleName.required' => 'Middle Name  is required.',
            'Gender.required' => 'Gender  is required.',
            'BirthDate.required' => 'Birth Date  is required.',
            'CivilStatus.required' => 'Civil Status  is required.',
            'ContactNo.required' => 'Contact No.  is required.',
            'Nationality.required' => 'Nationality  is required.',
            'Occupation.required' => 'Occupation  is required.',
        ]);


        $save =  Student::create([
            'firstname' => $request->FirstName,
            'lastname' => $request->LastName,
            'middlename' => $request->MiddleName,
            'suffix' => $request->Suffix,
            'gender' => $request->Gender,
            'birthdate' => $request->BirthDate,
            'civilstatus' => $request->CivilStatus,
            'contactno' => $request->ContactNo,
            'nationality' => $request->Nationality,
            'occupation' => $request->Occupation,
        ]);
        if ($save) {
            echo 'student saved';
        } else {
            echo 'virus';
        }
    }
}
