<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index() {
        return view('cars.index');
    }

    public function create() {
        return view('cars.create');
    }

    public function details($id) {
        $car = app\Models\Car::find($id);
        return view('cars.details', compact('car'));
    }
}
