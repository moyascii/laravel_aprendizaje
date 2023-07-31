<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">About</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">Projets</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">contact</a></li>
    </ul>
</nav>
