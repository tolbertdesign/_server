<?php

namespace App\Http\Controllers;

class SpaController
{
    public function index()
    {
        $data = (object) [
            'event_name' => 'Program Event Name'
        ];

        $program = json_encode($data);

        return view('index', compact(['program']));
    }
}
