<div>
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="text-center my-4">Kuis Hubungan Warga Negara dan negara</h1>

      <div class="card-wrapper border">

        @for($i = 0; $i < $quiz->count(); $i++)
        @if($quiz[$i]->status == 1)
        <button class="card approved cencored">
          <img src="{{asset("/checklist.png")}}" width="80px">
        </button>
        @elseif($quiz[$i]->difficult ==  "easy")
        <button class="card easy cencored" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="toQuestion({{$quiz[$i]->id_question}})">
          {{$i+1}}
        </button>
        @elseif($quiz[$i]->difficult == "medium")
        <button class="card medium cencored" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="toQuestion({{$quiz[$i]->id_question}})">
          {{$i+1}}
        </button>
        @else
        <button class="card hard cencored" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="toQuestion({{$quiz[$i]->id_question}})">
          {{$i+1}}
        </button>
        @endif
        @endfor
      </div>
      <div class="form-check p-4 mt-3">
        <input class="form-check-input " type="checkbox" value="" id="checkbox">
        <label class="form-check-label fs-3" for="checkbox">
          Lihat kotak
        </label>
      </div>
    </div>

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="false">
      <div class="modal-dialog modal-fullscreen">
        @isset($dropdown_data)
        <div class="modal-content">
          <div class="modal-header">
            <h1>Pertanyaan {{$dropdown_data["difficult"]}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="question {{$dropdown_data["difficult"]}} mt-2">
              {{$dropdown_data["question"]}}
            </p>

            <span class="my-4 d-block fs-3">Pilih jawaban yang tepat: </span>
            <div class="row d-flex g-2">
              @foreach($dropdown_data["answers"] as $answer)
              <input type="radio" class="btn-check" value="{{$answer["correct_answer"]}}" id="info-outlined-{{$answer["id_answer"]}}" wire:click="validating({{$answer["id_answer"]}})">
              <label class="btn btn-outline-info answer-option text-black" for="info-outlined-{{$answer["id_answer"]}}">{{$answer["answer"]}}</label>
              @endforeach
            @isset($dropdown_timer)
              @if($dropdown_timer >= 0)
              <div class="text-danger timer mt-2" wire:poll.1000ms.visible="runTimer">{{$dropdown_timer}}</div>
              @endif
            @endisset
            </div>
          </div>
        </div>
        @endisset
      </div>
    </div>

  </div>
</div>