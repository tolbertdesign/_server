<?php

namespace App\Http\Controllers;

use App\Entities\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index()
    {
        return Program::latest()->get();
    }

    public function show($id)
    {
        return Program::find($id);

    }
}
