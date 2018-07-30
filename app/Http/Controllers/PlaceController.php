<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index() {
        return response()->json(Place::all());
    }

    public function store(Request $request) {
        foreach ($request->toArray() as $item)
            Place::create($item);

    }
}
