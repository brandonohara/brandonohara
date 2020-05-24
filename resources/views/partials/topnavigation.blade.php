<nav class="navbar navbar-{{ $type }} navbar-expand-lg fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Brandon OHara</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#custom-collapse" aria-controls="custom-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}#development" data-target="#development" class="nav-link scroll-to">Development</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('articles.index') }}" class="nav-link scroll-to">Articles</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}#resume" data-target="#resume" class="nav-link scroll-to">Resume</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}#plugins" data-target="#plugins" class="nav-link scroll-to">Plugins</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}#about" data-target="#about" class="nav-link scroll-to">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}#contact" data-target="#contact" class="nav-link scroll-to">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>