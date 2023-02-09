<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index() {
        // Eloquent
        $values = Test::all();
        //dd($values);
        $count = Test::count();

        $first = Test::findOrFail(1);

        return view('tests.test', compact('values', 'count', 'first'));
    }
}
