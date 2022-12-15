<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class artsController extends Controller
{
    public function create()
    {
        return view('form');
    }
    // public function store(ArtsRequest $r){  //! method 1
    //     return view("data", ['data' => $r]);
    // }


    // public function store(Request $r) //!Method 2
    // {
    //     $valid = Validator::make($r -> all(), [
    //         'name' => 'bail|required|between:4,10|alpha',
    //         'price' => 'bail|required|numeric'
    //     ]);

    //     if ($valid -> fails()) return back()->withErrors($valid)->withInput();
    //         return view("data", ['data' => $r]);

    // }

    public function store(Request $r) //!Method 3
    {
        // $this->validate($r, [
        //     'name' => 'bail|required|between:4,10|alpha',
        //     'price' => 'bail|required|numeric'
        // ]);
        // return view("data", ['data' => $r]);

        // return $r->input('name') . ' ' . $r->input('price') . ' ' . $r->input('desc');
        return dd($r);
    }
}
