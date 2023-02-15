<div>
    <div class="block">
        <div class="app-faq2">
            @if ($showResults)
            <div class="app-faq-item">
                <div class="app-faq-item-content tcenter">
                  <h3> Your Results:</h3>
                  <p class="mn">{{$gradeScore}}/{{$maxCount + 1}}</p>
                  <a href="{{route('student.my.quiz', [$moduleid])}}" class="btn btn-warning btn-icon-fixed">
                    <span class="icon-menu-circle"></span> Take Quiz Again
                  </a>
                </div>
            </div>
            @else
            <div class="app-faq-item">
                <div class="app-faq-item-title">
                    <h4>Question {{$index + 1}}.</h4> 
                    {!! $questions[$index]->question !!}
                </div>
                <div class="app-faq-item-content">
                    @foreach ($questions[$index]->answers as $answer)
                    <div class="form-group snc">
                        <input type="radio" wire:model="ansr" value="{{$answer->answerid}}">
                        <p>{{$answer->answer}}</p>
                    </div>
                    @endforeach
                    @if ($this->index < $this->maxCount)
                        <button wire:click="nextQuestion" class="btn btn-info btn-icon-fixed pull-right"><span class="icon-menu-circle"></span> Next</button>
                        @else
                        <button wire:click="results" class="btn btn-danger btn-icon-fixed pull-right"><span class="icon-menu-circle"></span> See Results</button>
                    @endif
                </div>
            </div>
            @endif
            
        </div>
    </div>
</div>
