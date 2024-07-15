<nav>
    <section>
        <div class="nav__logo__box">
            <a href="#">
                <img src="{{asset('images/logo/underdogbytes.svg')}}" alt="">
            </a>
            <span>Olá amigos!</span>
        </div>
        <div class="nav__links__box">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/portfolio') }}">Portfolio</a>
            <a href="{{ url('/contato') }}">Contato</a>
            <a href="{{ url('https://www.linkedin.com/in/btrz/') }}" target="_blank">
                <div class="navbar__icon navbar__icon--linkedin"></div>
            </a>
            <a href="{{ url('https://www.behance.net/bridgetocross') }}" target="_blank">
                <div class="navbar__icon navbar__icon--behance"></div>
            </a>
            <a href="{{ url('https://patreon.com/btrz') }}" target="_blank">
                <div class="navbar__icon navbar__icon--patreon"></div>
            </a>
            <a href="{{ url('https://github.com/underdogbytes') }}" target="_blank">
                <div class="navbar__icon navbar__icon--github"></div>
            </a>
            <a href="{{ url('https://www.instagram.com/bridgetocross') }}" target="_blank">
                <div class="navbar__icon navbar__icon--instagram"></div>
            </a>
        </div>
    </section>
</nav>