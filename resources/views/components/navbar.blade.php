<nav role="navigation" aria-label="{!! __('navbar.role_arial_label') !!}">
    <section>
        <div class="nav__logo__box">
            <a href="#">
                <img
                    src="{{asset('images/logo/underdogbytes.svg')}}"
                    alt="{!! __('navbar.logo_alt') !!}"
                />
            </a>
            <span>{!! __('navbar.logo_msg') !!}</span>
        </div>
        <div class="nav__links__box">
            <a href="{{ url('/') }}">{!! __('navbar.home') !!}</a>
            <a href="{{ url('/sobre') }}">{!! __('navbar.about') !!}</a>
            <a href="{{ url('/projetos') }}">{!! __('navbar.projects') !!}</a>
            <a href="{{ url('/contato') }}">{!! __('navbar.contact') !!}</a>
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