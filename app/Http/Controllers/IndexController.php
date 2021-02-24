<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function services(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        return view('services');
    }
}
