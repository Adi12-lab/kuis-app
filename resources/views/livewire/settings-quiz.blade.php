<div>
  <div class="container">
    <div class="row">
      <table class="table">
        
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Pertanyaan</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        
        <tbody>
          @for($i = 0; $i < $questions->count(); $i++)
            <tr>
              <th scope="row">{{$i+1}}</th>
              <td>{{$questions[$i]["question"]}}</td>
              <td>
                @if($questions[$i]["status"] == 1)
                   <a class="btn btn-primary" role="button" wire:click="activate({{$questions[$i]["id_question"]}})">Aktifkan</a>
                @else
                <a class="btn btn-primary disabled" role="button" aria-disabled="true">Aktifkan</a>
                @endif
              </td>
              
            </tr>
          @endfor
        </tbody>
      </table>
    </div>
  </div>
</div>