<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuizController extends Controller
{
    public Function getQuestions(){

        $allQuestions = Question::all();
        return $allQuestions -> toJson();
    }

    public Function getAnswers(){

        $allAnswers = Answer::all();
        return $allAnswers -> toJson();
    }
}
