<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;
use App\Models\QuestionModel;

class AnswerController extends Controller
{
    public function index($id){
      $answers = AnswerModel::get_all();
      $question = QuestionModel::get_all()->where('id', '=', $id);
      // dd($question);
      $filtered = $answers->where('questionId', '=', $id);
      // dd(compact(['filtered', 'id', 'question']));
      return view('answers.index', compact(['filtered', 'id', 'question']));
    }

    public function store(Request $request, $id){
      $data = $request->all();
      unset($data["_token"]);
      $answers = AnswerModel::save($data);
      $question = QuestionModel::get_all()->where('id', '=', $id);
      $filtered = $answers->where('questionId', '=', $id);
      return view('answers.index', compact(['filtered', 'id', 'question']));
    }
}
