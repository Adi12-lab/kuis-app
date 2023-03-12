<?php

namespace App\Models;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $primaryKey = "id_question";
    public $timestamps = false;
    public function answers() {
      return $this->hasMany(Answer::class, "id_question");
    }
      
}
