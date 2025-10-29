<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    //
    public function index(Request $request)
    {
        $cars = Car::when($request->search, function ($query) use ($request) {
            return $query->whereAny(['model'], $request->search);
        })->get();
        return view('cars.index', compact('cars'));
    }
    public function addData()
    {
        DB::table('cars')->insert(
            [
                [
                    'name' => 'Toyota',
                    'model' => 'Corolla',
                    'year' => 2020,
                    'color' => 'Red',
                ],
                [
                    'name' => 'ford',
                    'model' => 'Camry',
                    'year' => 2000,
                    'color' => 'yellow',
                ],

            ]

        );
        return "Data inserted successfully";
    }
    public function getData()
    {
        $items = DB::table('cars')->get();
        return $items;
    }
    public function updateData()
    {
        DB::table('cars')->where('id', 3)->update([
            'name' => 'Honda',
            'model' => 'Civic',
            'year' => 2022,
            'color' => 'Black',
        ]);
        return "Data updated successfully";
    }
    public function deleteData()
    {
        DB::table('cars')->delete();
        return "Data deleted successfully";
    }
}
