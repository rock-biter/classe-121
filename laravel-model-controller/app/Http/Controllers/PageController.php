<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {

        $departments = Department::all(); // SELECT * from `departments`

        //$filteredDepartment = Department::where('head_of_department', 'Gilda Romano')->orderBy('name', 'desc')->first(); // SELECT * FROM `departments` WHERE `head_of_department` = 'Gilda Romano' ORDER BY `name` DESC

        //$orderedDepartments = Department::orderBy('name', 'desc')->get();
        // SELECT * from `departments` ORDER BY `name` DESC

        //$id = 5;
        //$department = Department::find($id); // SELECT * FROM `departments` WHERE `id` = 5

        // dump($departments);
        // dump($orderedDepartments);
        // dump($department);
        // dd($filteredDepartment);

        // dd($departments);
        $data = [
            'departments' => $departments
        ];

        // return view('welcome', compact('departments'));
        return view('welcome', $data);
    }

    public function contatti()
    {
        return view('contact');
    }
}
