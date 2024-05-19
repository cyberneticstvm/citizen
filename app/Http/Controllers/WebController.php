<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "The Citizen - The voice of the Citizen";
        $description = "We do surveys, assessments, polls and more for you";
        $keywords = "Surveys, Assesments Polls";
        return view('index', compact('title', 'description', 'keywords'));
    }
}
