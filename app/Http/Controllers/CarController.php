<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    //
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
        DB::table('cars')->where('name', 'ford')->delete();
        return "Data deleted successfully";
    }
}
