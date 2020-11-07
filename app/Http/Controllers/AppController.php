<?php

namespace App\Http\Controllers;
use App\Course;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('library', ['courses' => Course::all()]);
    }
}
