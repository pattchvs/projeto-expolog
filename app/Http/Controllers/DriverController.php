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
    public function destroy($id)
    {
        Driver::findOrFail($id)->delete();
        return redirect('/dashboard');
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

