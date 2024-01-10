<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function contactForm()  {
        return view('components.contactForm');
    }
}
