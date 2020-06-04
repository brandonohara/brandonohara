<section id="resume" class="module module-gray">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="module-header wow fadeInUp">
                    <h2 class="module-title">
                        <span class="hidden-print">Resume</span>
                        <span class="visible-print">Brandon O'Hara</span>
                    </h2>
                    <p class="module-subtitle visible-print">
                        (406) 850-3117
                        <span class="module-seperator">|</span>
                        Billings, MT
                        <span class="module-seperator">|</span>
                        brandon@brandonohara.com
                    </p>
                    <div class="module-line"></div>
                </div>
            </div>
        </div>

        @foreach($resume->where('visible', 1)->groupBy('group') as $group => $items)
            <div class="row">
                <div class="col-md-3 resume-label text-right">
                    <h3>{{ $group }}</h3>
                </div>
                <div class="col-md-9 resume-items">
                    @foreach($items as $item)
                        @include('resume.position', ['position' => $item])
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="row visible-print">
            <div class="col-sm-6 offset-sm-3">
                <div class="module-header wow fadeInUp">
                    <h2 class="module-title">Brandon O'Hara</span></h2>
                    <p class="module-subtitle">
                        (406) 850-3117
                        <span class="module-seperator">|</span>
                        Billings, MT
                        <span class="module-seperator">|</span>
                        brandon@brandonohara.com
                    </p>
                    <div class="module-line"></div>
                </div>
            </div>
        </div>

        <div id="resume-extended" class="collapse">
            @foreach($resume->where('visible', 0)->groupBy('group') as $group => $items)
                <div class="row">
                    <div class="col-md-3 resume-label text-right">
                        <h3>{{ $group }}</h3>
                    </div>
                    <div class="col-md-9 resume-items">
                        @foreach($items as $item)
                            @include('resume.position', ['position' => $item])
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="row">
                <div class="col-md-3 resume-label text-right">
                    <h3>Development Skills</h3>
                </div>
                <div class="col-md-9 resume-items">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h4>Back-End Development</h4>
                            <p>{{ __('skills.backend') }}</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h4>Front-End Development</h4>
                            <p>{{ __('skills.frontend') }}</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h4>Infrastructure & DevOps</h4>
                            <p>{{ __('skills.tools') }}</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h4>Content Management</h4>
                            <p>{{ __('skills.cms') }}</p>
                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>



        <h5 class="hidden-print text-center">
            <a href="#resume-extended" data-toggle="collapse" data-target="#resume-extended" id="resume-extended-button" onclick="this.innerText = (this.innerText == 'VIEW MORE' ? 'VIEW LESS' : 'VIEW MORE');">
                VIEW MORE
            </a>
        </h5>
        

        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <a onclick="window.print()" class="btn btn-primary">
                    <span class="fal fa-fw fa-download"></span> Download CV
                </a>
            </div>
        </div>

    </div>
</section>