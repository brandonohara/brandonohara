<div class="position">
    <div class="row">
        <div class="col-md-8 col-sm-8 resume-item">
            <h4>{{ $position->title }}</h4>
            @if (!$position->prior)
                <h6 class="visible-print lowercase">{{ $position->url }}</h6>
            @endif
            <p>{{ $position->description }}</p>
        </div>
        <div class="col-md-4 col-sm-4 resume-place">
            @if($position->location)
                <h4>
                    <span class="icon icon-suitcase"></span> 
                    {{ $position->location}}
                </h4>
            @endif
            @if($position->date)
                <h4>
                    <span class="icon icon-calendar"></span>
                    {{ $position->date}}
                </h4>
            @endif
        </div>
    </div>

    @if ($position->previous->count())
        <div class="resume-previous">
            @foreach ($position->previous as $previous)
                @include('resume.position', ['position' => $previous])
            @endforeach
        </div>
    @endif

    @if (!$position->prior)
        <div class="row position">
            <div class="col-md-8 col-sm-8 resume-item skills">
                @if($position->skills)
                    <h6>
                        <strong>Skills:</strong> {{ $position->skills}}
                    </h6>
                @endif
            </div>
        </div>
        <hr class="hidden-xs">
    @endif
</div>