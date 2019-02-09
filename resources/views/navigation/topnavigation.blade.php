<header class="header" id="header">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">Brandon OHara</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('home') }}#development">Development</a></li>
                    <li><a href="{{ route('home') }}#plugins">Plugins</a></li>
                    <li><a href="{{ route('home') }}#resume">Resume</a></li>
                    <li><a href="{{ route('home') }}#about">About</a></li>
                    <li><a href="{{ route('home') }}#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>