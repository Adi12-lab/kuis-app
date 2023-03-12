<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class SettingsQuiz extends Component
{
    public $questions;
    public function mount() {
      $this->questions = Question::all();
    }
    public function activate(Question $question) {
      $question->status = 0;
      $question->save();
      $this->emit("Alert", "success","Berhasil","Soal berhasil diaktifkan dan siap dimainkan kembali...");
    }
    public function render()
    {
        return view('livewire.settings-quiz')->extends("main");
    }
}
