<section>
    <h1>Information</h1>
    <section>
        <h2>Share</h2>
        <nav>
            <ul>
                <li><a href="http://www.facebook.com/share.php?u=http://www.activisme.be&title=activisme.be">FACEBOOK</a></li>
                <li><a href="http://twitter.com/intent/tweet?status=activisme.be+http://www.activisme.be">TWITTER</a></li>
                <li><a href="http://www.activisme.be">LINKEDIN</a></li>
                <li><a href="https://plus.google.com/share?url=http://www.activisme.be">GOOGLEPLUS</a></li>
            </ul>
        </nav>
    </section>

    <section>
        <h2>Follow</h2>
        <nav>
            <ul>
                <li><a href="https://www.facebook.com/ActivismeBE/" target="blank">FB ACTIVISME</a></li>
                <li><a href="https://twitter.com/Activisme_be" target="blank">TWITTER ACTIVISME</a></li>
                <li><a href="https://www.facebook.com/tom.manhaeghe.game" target="blank">FB TOM MANHAEGHE</a></li>
                <li><a href="https://twitter.com/manhaeghe" target="blank">TWITTER TOM MANHAEGHE</a></li>
                <li><a href="https://www.flickr.com/photos/activisme/" target="blank">FLICKR</a></li>
                <li><a href="https://www.youtube.com/channel/UCVL0CgcRZu8fgCKad5Mi9WA" target="blank">YOUTUBE</a></li>
            </ul>
        </nav>
    </section>

    <section>
        <h2>Links</h2>
        <nav>
            <ul>
                @if ((int) count($links) === 0)
                    <li><a href="#">Er zijn geen links</a></li>
                @else
                    @foreach ($links as $link)
                        <li><a href="{{ $link->link }}" target="blank">{{ strtoupper($link->name) }}</a></li>
                    @endforeach
                @endif
            </ul>
        </nav>
    </section>
</section>
<p><strong>Copyright &copy; activisme_be {{ date('Y') }}</strong></p>