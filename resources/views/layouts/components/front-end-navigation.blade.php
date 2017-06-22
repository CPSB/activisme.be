<ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('volunteer/new') }}">Word vrijwilliger</a></li>
    <li><a href="mailto:info@activisme.be">Contact</a></li>

    @if (auth()->check())
        <li><a href="{{ url('backend') }}">Back-end</a></li>
        <li><a href="{{ url('authencation/logout') }}">Uitloggen</a></li>
    @else
        <li><a href="{{ url('authencation/login') }}">Log-in</a></li>
        <li><a href="{{ url('authencation/register') }}">Register</a></li>
    @endif
</ul>