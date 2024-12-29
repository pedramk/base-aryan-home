<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HRController extends Controller
{
    public function create()
    {
        return Inertia::render('HR/Person/Create');
    }
}
