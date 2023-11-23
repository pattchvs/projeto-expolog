<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('welcome', ['exams' => $exams]);
    }
}
