<?php

namespace App\Http\Livewire;
use App\Models\Question;
use App\Models\Answer;
use Livewire\Component;
use Illuminate\Support\Arr;
 
use Alert;

class AllQuiz extends Component
{
    public $quiz;
    public $dropdown_data;
    public $dropdown_timer;
    public function mount() {
        $this->quiz = Question::all()->shuffle();
    }
    public function toQuestion(Question $id_question) {
      $data = Question::find($id_question)[0];
      switch($data->difficult) {
        case "easy":
          $timer = 10;
          break;
        case "medium":
          $timer = 15;
          break;
        case "hard":
          $timer = 20;
          break;
      }
      $this->dropdown_data = collect($this->dropdown_data)
      ->put("difficult",$data->difficult)
      ->put("question", $data->question)
      ->put("answers",$data->answers);
      $this->dropdown_timer = $timer;
    }
    public function runTimer() {
      $this->dropdown_timer -= 1;
      $message = ["Ngelamun ?", "Gak sadar seiring waktu kehilangan dia","Lah ngapain gak jawab ? wkwkkw"];
      if($this->dropdown_timer == 0) {
      $this->emit("Alert", "error","Kehabisan Waktu", Arr::random($message));
      }
    }
    public function validating(Answer $answer) {
    
      //Berhentikan timernya
      $this->dropdown_timer = null;
      $messageSuccess = ["Ngueri","Hoki gak sih?"];
      $messageFail = ["Awowok","Belajar lagi dek .."];

      if($answer->correct_answer == 1) {
        $question = Question::find($answer->id_question);
        $question->status = 1;
        $question->save();
        $this->emit("Alert","success", "Berhasil", Arr::random($messageSuccess));
      } else {
        $this->emit("Alert", "error","Gagal", Arr::random($messageFail));
      }
    }
    public function render()
    {
        return view('livewire.all-quiz')
        ->extends("main");
    }
}
