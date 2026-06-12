<?php

namespace App\Http\Controllers;

use App\Models\Restorant;

class RestorantController extends Controller
{
    public function index()
    {
        $restos = Restorant::all();

        return view('customer.resto', compact('restos'));
    }
}