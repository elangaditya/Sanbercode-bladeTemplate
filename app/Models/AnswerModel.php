<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class AnswerModel{
  public static function get_all(){
    $answer = DB::table('question')->get();
    return $answer;
  }

  public static function save($data){
    $new_item = DB::table('question')->insert($data);
    return $new_item;
  }
}
 ?>
