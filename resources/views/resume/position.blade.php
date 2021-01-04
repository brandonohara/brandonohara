<div class="position">
    <div class="row">
        <div class="col-md-9 col-sm-8 resume-item">
            <a href="{{ $position->url }}" target="_blank" class="hidden-print">
                <h4>{{ $position->title }}</h4>
            </a>
            <h4 class="visible-print">{{ $position->title }}</h4>
            <p>{!! $position->description !!}</p>
        </div>
        <div class="col-md-3 col-sm-4 resume-place">
            @if($position->location)
                <h4>
                    <span class="fal fa-fw fa-suitcase"></span> 
                    {{ $position->location}}
                </h4>
            @endif
            @if($position->date)
                <h4>
                    <span class="fal fa-fw fa-calendar"></span>
                    {{ $position->date}}
                </h4>
            @endif
            @if($position->city)
                <h4>
                    <span class="fal fa-fw fa-map-marker-alt"></span>
                    {{ $position->city}}
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
        <div class="row position hidden-print">
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