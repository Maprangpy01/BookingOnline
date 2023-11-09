<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuestionnaireController extends Controller
{
    public function QuestionMain() {
        Log::info("[Start:QuestionMain]");
        Log::info("[End:QuestionMain]");
        return view("components.Questionnaire.question-main");
    }
}
