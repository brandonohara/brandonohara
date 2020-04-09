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

        @foreach($resume->groupBy('group') as $group => $items)
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

            <div class="row">
                <div class="col-md-3 resume-label text-right">
                    <h3>Projects</h3>
                </div>
                <div class="col-md-9 resume-items">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 d-flex flex-column">
                            <h4>Trak Software Laravel Application</h4>
                            <a href="https://docs.trak.io" target="_blank">https://docs.trak.io</a>
                            <p class="no-margin">
                                <span class="fal fa-fw fa-suitcase"></span> Trak Software
                                <span class="margin-right margin-left">|</span>
                                <span class="fal fa-fw fa-calendar"></span> 2015 - Present
                            </p>
                            <p class="flex-grow-1">Trak Sponsorship is a collaboration tool used by sports organizations who sell multi-asset corporate partnerships and businesses who buy them. The newest version of Trak Sponsorship is built on the Laravel PHP framework and AngularJS JavaScript package.</p>
                            
                        </div>
                        <div class="col-xs-12 col-md-6 d-flex flex-column">
                            <h4>OnMetric Business Analytics</h4>
                            <a href="https://onmetric.com" target="_blank">https://onmetric.com</a>
                            <p class="no-margin">
                                <span class="fal fa-fw fa-suitcase"></span> OnMetric
                                <span class="margin-right margin-left">|</span>
                                <span class="fal fa-fw fa-calendar"></span> 2018 - 2019
                            </p>
                            <p class="flex-grow-1">A AngularJS front end application extending a business analytics tool. Components include integrations with Google Analytics, MailChimp, and communicating with a custom Python API.</p>
                        </div>
                        <div class="col-xs-12 col-md-6 d-flex flex-column">
                            <h4>XTERRA Planet</h4>
                            <a href="https://xterraplanet.com" target="_blank">https://xterraplanet.com</a>
                            <p class="no-margin">
                                <span class="fal fa-fw fa-suitcase"></span> Splashlab Social
                                <span class="margin-right margin-left">|</span>
                                <span class="fal fa-fw fa-calendar"></span> 2017 - 2018
                            </p>
                            <p class="flex-grow-1">A Drupal / Magento website driving race registration and race gear ecommerce. Website has several integrations between Drupal and Magento to seemlessly serve content.</p>
                        </div>
                        <div class="col-xs-12 col-md-6 d-flex flex-column">
                            <h4>Aruba Networks</h4>
                            <a href="https://www.liquidagency.com/work/aruba-titans-of-tomorrow/" target="_blank">https://www.liquidagency.com/work/aruba-titans-of-tomorrow/</a>
                            <p class="no-margin">
                                <span class="fal fa-fw fa-suitcase"></span> Splashlab Social
                                <span class="margin-right margin-left">|</span>
                                <span class="fal fa-fw fa-calendar"></span> 2017
                            </p>
                            <p class="flex-grow-1">A Laravel Application built for HP's announcement of acquisition on Aruba Networks. The application provided lead generation by funneling user inforamtion after completing the conference quiz.</p>
                        </div>
                    </div>
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