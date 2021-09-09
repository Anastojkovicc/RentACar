<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    public function vratiSveAute(){
        return Auto::all();
    }

    public function dodajAuto(){
        request()->validate([
            'Marka'=>'required',
            'Model'=>'required',
            'Godiste'=>'required',
            'CenaPoDanu' => 'required'
        ]);
        return Auto::create([
            'Marka'=>request('Marka'),
            'Model'=>request('Model'),
            'Godiste'=>request('Godiste'),
            'CenaPoDanu'=>request('CenaPoDanu')
        ]);

    }

    public function izmeniAuto(Auto $auto){

        request()->validate([
            'Marka'=>'required',
            'Model'=>'required',
            'Godiste'=>'required',
            'CenaPoDanu' => 'required'
        ]);
        $success= $auto-> update([
            'Marka'=>request('Marka'),
            'Model'=>request('Model'),
            'Godiste'=>request('Godiste'),
            'CenaPoDanu'=>request('CenaPoDanu')
        ]);

        return [
            'success' => $success
         ];
    }

    public function izbrisiAuto(Auto $auto){
        $success= $auto-> delete();

        return [
            'success' => $success
         ];
    }

}
