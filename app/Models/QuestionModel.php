<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel{
  public static function get_all(){
    $questions = DB::table('question')->get();
    return $questions;
  }

  public static function save($data){
    $new_item = DB::table('question')->insert($data);
    $questions = DB::table('question')->get();
    return $questions;
  }
}
 ?>
