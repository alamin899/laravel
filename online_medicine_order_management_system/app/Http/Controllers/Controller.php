<?php

namespace App\Http\Controllers;

use App\pharmacy;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return redirect('/')->with('message','you click home index');
    }


    public function listpharmacy()
    {

        $pharmacies = pharmacy::all();


        return view('frontEnd.view.pharmacyList', [
            'pharmacies' => $pharmacies
        ]);

    }






}
