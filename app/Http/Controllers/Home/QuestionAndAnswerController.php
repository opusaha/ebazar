<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionAndAnswerController extends Controller
{
    public function question(Request $request)
    {
        $question = new Question();
        $question->user_id = Auth::id();
        $question->product_id = $request->product_id;
        $question->seller_id = $request->seller_id;
        $question->question = $request->question;
        $question->save();
        return redirect()->back();
    }
    public function response()
    {
        $questions = Question::where('seller_id',Auth::guard('seller')->user()->id)->where('status','null')->get();
        return view('vandor.answer.index',compact('questions'));
    }
    public function answer(Request $request)
    {
        $answer = new Answer();
        $answer->question_id = $request->question_id;
        $answer->seller_id = Auth::guard('seller')->user()->id;
        $answer->answer = $request->answer;
        $answer->save();

        $question = Question::findOrFail($answer->question_id);
        $question->status = 'answered';
        $question->save();

        return redirect()->route('seller.response');
    }
}
