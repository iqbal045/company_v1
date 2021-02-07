<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\SectionTitle;

class HomeController extends Controller
{
    public function index()
    {
        $section_title = SectionTitle::findOrFail(1)->first();

        $about = About::findOrFail(1)->with('images')->first();

        return view('frontend.home.index', compact('section_title', 'about'));
    }
}
