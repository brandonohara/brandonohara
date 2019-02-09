@extends('layouts.app')

@section('content')

<section id="intro">
    <h1 class="hidden-xs hidden-sm">HELLO, I'M BRANDON O'HARA</h1>
    <h2>LARAVEL ENTHUSIAST. WEB DEVELOPER. BEER DRINKER.</h2>
</section>

<section id="development" class="module module-gray">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">
                <div class="module-header wow fadeInUp">
                    <h2 class="module-title">Development</h2>
                    <div class="module-line"></div>
                    <p class="module-subtitle">Montana based web developer specializing in creating web applications in Laravel, VueJS and Angular. Currently overseeing engineering at Trak Software as Chief Technology Officer, building a web application to simplify and streamline communication in sponsorship activation and management.</p>
                    <div class="module-line"></div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-sm-6 col-md-3">
                <div class="iconbox">
                    <div class="iconbox-icon">
                        <span class="icon icon-browser"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Front-End Development</h3>
                        <p>HTML5 & CSS3, JS ES2015, AngularJS, Vue.JS, Sass & Less, jQuery, Bootstrap</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3" ng-repeat="skill in skills">
                <div class="iconbox">
                    <div class="iconbox-icon">
                        <span class="icon icon-terminal"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Back-End Development</h3>
                        <p>PHP, Laravel, Codeigniter, PHPUnit, MySQL, PostgreSQL, Redis</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3" ng-repeat="skill in skills">
                <div class="iconbox">
                    <div class="iconbox-icon">
                        <span class="icon icon-wrench"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Tools & Automation</h3>
                        <p>Vagrant, Grunt, Gulp, Webpack, Git, Yeoman, Bower, Composer</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3" ng-repeat="skill in skills">
                <div class="iconbox">
                    <div class="iconbox-icon">
                        <span class="icon icon-software"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">CMS & Software</h3>
                        <p>ExpressionEngine, Drupal 8, Magento, Wordpress, Photoshop, Sketch</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="plugins" class="module">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="module-header wow fadeInUp">
                    <h2 class="module-title">SimplEE Plugins</h2>
                    <div class="module-line"></div>
                </div>
            </div>
        </div>
        
        <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 plugin">
                <h1><span class="icon-camera"></span></h1>
                <h4 class="plugin-title">SimplEE Instagram</h4>
                <p>Plugin that allows you to integrate Instagram's API directly in your templates.</p>
                <p class="plugin-links">
                    <a href="https://github.com/brandonohara/{SimplEE-Instagram"><strong><span class="icon icon-github"></span> Github</strong></a>
                </p>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 plugin">
                <h1><span class="icon-house"></span></h1>
                <h4 class="plugin-title">Rets</h4>
                <p>Module that allows scraping MLS databases via RETS, and displaying listings.</p>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 plugin">
                <h1><span class="icon-geolocate"></span></h1>
                <h4 class="plugin-title">SimplEE Geolocate</h4>
                <p>Fieldtype that geolocates given addresses, and stores Google's data response.</p>
                <p class="plugin-links">
                    <a href="https://github.com/brandonohara/SimplEE-Geolocate"><strong><span class="icon icon-github"></span> Github</strong></a>
                </p>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 plugin">
                <h1><span class="icon-search"></span></h1>
                <h4 class="plugin-title">SimplEE Search</h4>
                <p>Module that allows advanced searching of channel entries, with weighted sorting.</p>
                <p class="plugin-links">
                    <a href="https://github.com/brandonohara/SimplEE-Search"><strong><span class="icon icon-github"></span> Github</strong></a>
                </p>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 plugin">
                <h1><span class="icon-phone"></span></h1>
                <h4 class="plugin-title">SimplEE Phone</h4>
                <p>Simple fieldtype that formats and maintains user inputted phone numbers.</p>
                <p class="plugin-links">
                    <a href="https://github.com/brandonohara/SimplEE-Phone"><strong><span class="icon icon-github"></span> Github</strong></a>
                </p>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 plugin">
                <h1><span class="icon-pizza"></span></h1>
                <h4 class="plugin-title">SimplEE Yelp</h4>
                <p>Plugin that extends Yelp's API to generate listings, reviews, and images.</p>
                <p class="plugin-links">
                    <a href="https://github.com/brandonohara/SimplEE-Yelp"><strong><span class="icon icon-github"></span> Github</strong></a>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</section>



<section id="resume" class="module module-gray">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="module-header wow fadeInUp">
                    <h2 class="module-title hidden-print">Resume</h2>
                    <h2 class="module-title visible-print">Brandon O'Hara</h2>
                    <p class="module-subtitle visible-print">
                        (406) 850-3117
                        <span class="module-seperator">|</span>
                        Bozeman, MT
                        <span class="module-seperator">|</span>
                        brandon@brandonohara.com
                    </p>
                    <div class="module-line"></div>
                </div>
            </div>
        </div>

        @foreach($resume->groupBy('group') as $group => $items)
            <div class="row">
                <div class="col-md-3 resume-label">
                    <h3>{{ $group }}</h3>
                </div>
                <div class="col-md-9 resume-items">
                    @foreach($items as $item)
                        <div class="row">
                            <div class="col-md-8 col-sm-8 resume-item">
                                <h4>{{ $item->title }}</h4>
                                <h6 class="visible-print lowercase">{{ $item->url }}</h6>
                                <p>{{ $item->description }}</p>
                                @if($item->skills)
                                    <h6><strong>Skills:</strong> {{ $item->skills}}</h6>
                                @endif
                                <hr class="hidden-xs">
                            </div>
                            <div class="col-md-4 col-sm-4 resume-place">
                                @if($item->location)<h4><i class="icon icon-suitcase"></i> {{ $item->location}}</h4>@endif
                                @if($item->date)<h4><i class="icon icon-calendar"></i> {{ $item->date}}</h4>@endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <a onclick="window.print()" class="btn btn-primary"><i class="icon icon-download"></i> Download CV</a>
            </div>
        </div>

    </div>
</section>

<section id="callout">
    <div class="container">

        <div class="row">
            <div class="col-sm-4 col-lg-3 col-lg-offset-2">
                <h2 class="callout-title">Let's Be Friends</h2>
                <p class="callout-description">I mean, I'm a pretty cool dude.</p>
            </div>
            <ul class="col-sm-8 col-lg-5 callout-social">
                <li>
                    <a href="https://www.facebook.com/brandon.ohara" class="wow fadeInUp" data-wow-delay="1s"><i class="icon icon-facebook"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/_brandonohara/" class="wow fadeInUp" data-wow-delay=".2s"><i class="icon icon-instagram"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/_brandonohara" class="wow fadeInUp" data-wow-delay=".3s"><i class="icon icon-twitter"></i></a>
                </li>
                <li>
                    <a href="https://www.snapchat.com/add/bohara45" class="wow fadeInUp" data-wow-delay=".4s"><i class="icon icon-snapchat"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/brandon-ohara" class="wow fadeInUp" data-wow-delay=".5s"><i class="icon icon-linked"></i></a>
                </li>
                <li>
                    <a href="https://github.com/brandonohara" class="wow fadeInUp" data-wow-delay=".6s"><i class="icon icon-github"></i></a>
                </li>
                <li>
                    <a href="http://expressionengine.stackexchange.com/users/1539/brandonohara" class="wow fadeInUp" data-wow-delay=".7s"><i class="icon icon-stackexchange"></i></a>
                </li>
            </ul>
        </div>

    </div>
</section>

<section id="about" class="module module-no-padding">

    <div class="row position-relative margin-0">
        <div class="col-xs-12 col-md-6 side-image"></div>
        <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">

            <div class="row">
                <div class="col-sm-12">
                    <div class="module-header module-header-left wow fadeInUp">
                        <h2 class="module-title">About</h2>
                        <p class="module-subtitle"></p>
                        <div class="module-line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="iconboxleft">
                        <div class="iconboxleft-text">
                            <h3 class="iconboxleft-title"><span class="icon icon-camera"></span> Photographer</h3>
                            <p class="iconboxleft-desc">I spend most weekends shooting weddings with my beautiful wife.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="iconboxleft">
                        <div class="iconboxleft-text">
                            <h3 class="iconboxleft-title"><span class="icon icon-painting"></span> Painter</h3>
                            <p class="iconboxleft-desc">I got a Bob Ross starter kit in January 2016, and never looked back.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="iconboxleft">
                        <div class="iconboxleft-text">
                            <h3 class="iconboxleft-title"><span class="icon icon-mountains"></span> Hiker</h3>
                            <p class="iconboxleft-desc">I love the oceans and beaches, but the mountains will always have my heart.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="iconboxleft">
                        <div class="iconboxleft-text">
                            <h3 class="iconboxleft-title"><span class="icon icon-beer"></span> Beer Drinker</h3>
                            <p class="iconboxleft-desc">There's nothing better than a cold IPA after getting into the mountains.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="contact" class="module module-no-padding">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 contact-box">
                <div class="module-header">
                    <h2 class="module-title">Contact Me</h2>
                    <div class="module-line"></div>
                </div>

                <form method="POST" action-"{{ route('contact.store') }}" role="form">
                    <div class="form-group wow fadeInUp">
                        <label class="sr-only" for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                        <label class="sr-only" for="email">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div>

                    <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                        <textarea name="message" class="form-control" rows="7" placeholder="Your message" required></textarea>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
@endsection
