<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Survey;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    function index()
    {
        $title = "The Citizen - The voice of the Citizen";
        $description = "We do surveys, assessments, polls and more for you";
        $keywords = "Surveys, Assesments Polls";
        return view('index', compact('title', 'description', 'keywords'));
    }

    function survey($slug)
    {
        $survey = Survey::where('name', str_replace('-', ' ', $slug))->firstOrFail();
        $title = $survey->name;
        $description = "We do surveys, assessments, polls and more for you";
        $keywords = "Surveys, Assesments Polls";
        return view('survey.index', compact('title', 'description', 'keywords', 'survey'));
    }

    function saveSurvey(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
        ]);
        try {
            $user = User::where('email', $request->email)->first();
            if (!$user) :
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'gender' => $request->gender,
                    'password' => Hash::make('password'),
                ]);
            endif;
            Answer::create([
                'survey_id' => decrypt($request->survey_id),
                'question_id' => decrypt($request->question_id),
                'user_id' => $user->id,
                'option_id' => $request->option_id,
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Survey submitted successfully.");
    }
}
