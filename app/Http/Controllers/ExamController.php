<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('welcome', ['exams' => $exams]);
    }

    public function store(Request $request)
    {

        define("INFERIOR",1);
        define("SUPERIOR",16);
        $exam = new Exam;

        $exam->driver_id = $request->driver_id;
        $exam->weeklyReport = $request->weeklyReport;
        $exam->especiality = $request->especiality;
        $exam->drugs = $request->drugs;
        $exam->lastExam = $request->lastExam;
        $exam->urgency = $request->urgency;
        $exam->hasExhaustion = $request->hasExhaustion;
        $exam->exam_date = Carbon::now()->toDateString(); // Obtém a data atual no formato "Y-m-d"
        $exam->workTime = rand(INFERIOR, SUPERIOR);
        $exam->save();

        return redirect('/');
    }
}
