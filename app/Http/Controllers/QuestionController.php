<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function index() 
    {
        $questions = Question::with('answer')->get();

        return view('questions.index', compact('questions'));
    }
    public function show($id) 
    {
        $question = Question::where('id', $id)->get();

        $answers = Answer::where('question_id', $id)->get();

        return view('questions.show', compact('question', 'answers'));
    }
}
