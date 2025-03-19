<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index():View
    {
        $courses = DB::table('courses')->get();

        return view('pages.courses.index', compact('courses'));
    }

    public function show(int $id): View
    {
        $course = DB::table('courses')->find($id);

        return view('pages.courses.show', compact('course'));
    }
}
