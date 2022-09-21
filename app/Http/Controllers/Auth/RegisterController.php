<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'typeFormation' => 'required',
            'sectionCondidat' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'email' => 'required|email',
            'phoneNb' => 'required',
            'birthDate' => 'required',
            'birthPlace' => 'required',
            'cin' => 'required',
            'adresse' => 'required',
            'region' => 'required',
            'ville' => 'required',
            'fileUpload' => 'required',
            'password' => Str::random(15),
        ]);

        User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'type_formation' => $request->typeFormation,
            'sections_condidat' => $request->sectionCondidat,
            'cin' => $request->cin,
            'Genre' => $request->genre,
            'numero_telephone' => $request->phoneNb,
            'date_naissance' => $request->birthDate,
            'lieu_naissance' => $request->birthPlace,
            'adresse' => $request->adresse,
            'region' => $request->region,
            'ville' => $request->ville,
            'file' => $request->file,
        ]);
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('dashboard');
    }
}
