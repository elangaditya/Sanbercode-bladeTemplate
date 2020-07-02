<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
class QuestionController extends Controller
{
    public function index(){
      $questions = QuestionModel::get_all();
      // dd($questions);
      return view('questions.index', compact('questions'));
    }

    public function create(){
      return view('questions.form');
    }

    public function store(Request $request){
      $data = $request->all();
      unset($data["_token"]);
      $questions = QuestionModel::save($data);
      return view('questions.index', compact('questions'));
    }
}
