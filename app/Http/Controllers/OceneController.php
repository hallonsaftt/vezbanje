<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    public function dodajOcene(Request $request)
    {
        $request->validate(
            [
                'profesor' => 'string|required',
                'ocena' => 'int|required|min:1|max:5',
                'predmet' => 'string|required'
            ]
        );

        Ocene::create([
           'profesor' => $request->get('profesor'),
           'ocena' => $request->get('ocena'),
           'predmet' => $request->get('predmet')
        ]);

        return redirect('/');
    }
}
