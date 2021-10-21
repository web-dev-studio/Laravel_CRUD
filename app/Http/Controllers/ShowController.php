<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;

class ShowController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('show.index', compact('contacts'));
    }

    public function show()
    {
        $career = Project::all();
        return view('show.index', compact('career'));
    }

}
