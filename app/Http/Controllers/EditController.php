<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Request $request)
    {
        return view('editone')->with('id', $id);
    }
}
