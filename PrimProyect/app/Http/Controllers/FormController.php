<?php

namespace App\Http\Controllers;

use Illuminate\Support\Fluent\DB;
use App\Models\registro;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function main()
    {
        return view("exito");
    }


    public function formulario()
    {
        return view("formulario");
    }

    public function store(Request $request)
    {

        $form = new registro;
        $form->name = $request->input('NameType');
        $form->age = $request->input('AgeType');
        $form->country = $request->input('CountryType');
        $form->telephone = $request->input('TelType');
        $form->email = $request->input('EmailType');
        $form->career = $request->input('WorkType');

        $form->save();

        return view("exito");
    }
}
