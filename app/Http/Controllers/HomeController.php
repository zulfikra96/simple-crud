<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function cars(Request $request, Car $car)
    {   
        $car->create(['cars' => $request->get('cars')]);
        
        return response()->json([
            'data' => 'berhasil'
        ]);
    }

    public function deleteCars(Request $request,Car $cars, $id)
    {
        
       $cars->where('id',$id)->delete();
       return response()->json([
           'data' => 'berhasil di hapus'
       ]);
    }
}
