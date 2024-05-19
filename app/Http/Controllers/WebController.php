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

    function survey1()
    {
        $title = "The Citizen - India Parliament Election 2024";
        $description = "We do surveys, assessments, polls and more for you";
        $keywords = "Surveys, Assesments Polls";
        return view('survey.1', compact('title', 'description', 'keywords'));
    }
}
