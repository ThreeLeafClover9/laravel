<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        $samples = Sample::all();
        return view('mysql', ['samples' => $samples]);
    }
}
