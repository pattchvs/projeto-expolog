<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::with('latestExam')->get();
        return view('welcome', ['drivers' => $drivers]);
    }

    public function driver(){
        $drivers = Driver::all();
        return view('driver', ['drivers'=> $drivers]);
    }

    public function newExam($driverId){
        $driver = Driver::findOrFail($driverId);
        dd($driver);
        return view('newexam', ['driver' => $driver]);
    }
    

    public function store(Request $request)
    {
        $driver = new Driver;

        $driver->name = $request->name;
        $driver->truck = $request->truck;
        $driver->save();

        return redirect('/');
    }
}

