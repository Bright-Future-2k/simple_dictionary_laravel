<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class language_control extends Controller
{
    public function fromTranslate(){
        return view('index');
    }
    public function translate(Request $request)
    {

        $language_english = ['pen' => 'but', 'book' => 'sach', 'cup' => 'coc'];

        $english = $request->english;

        foreach ($language_english as $key => $value) {
            if ($english === $key) {
                return view('alert', compact('value', 'key'));
            }
        }
        return view('error');


    }
}
