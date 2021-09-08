<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentiranje;

class RentiranjeController extends Controller
{

    public function vratiSvaRentiranja(){
        $data= Rentiranje::join('autos', 'autos.id','=','rentiranjes.Auto') -> get(['rentiranjes.Ime','rentiranjes.Prezime','autos.Marka','autos.Model','autos.Godiste']);
        return $data;
    }
    
    public function dodajRentiranje(){
            request()->validate([
                'Ime'=>'required',
                'Prezime'=>'required',
                'Auto'=>'required'
            ]);
            return Auto::create([
                'Ime'=>request('Ime'),
                'Prezime'=>request('Prezime'),
                'Auto'=> intval(request('Auto'))
            ]);
    }
}
