<nav role="navigation" aria-label="{!! __('navbar.role_arial_label') !!}">
    <section>
        <div class="nav__logo__box">
            <a href="/">
                <img src="{{asset('images/logo/underdogbytes.svg')}}" alt="{!! __('navbar.logo_alt') !!}" />
            </a>
            <span>{!! __('navbar.logo_msg') !!}</span>
        </div>
        <div class="nav__links__box">
            <a href="{{ url('/') }}">{!! __('navbar.home') !!}</a>
            <a href="{{ url('/sobre') }}">{!! __('navbar.about') !!}</a>
            <a href="{{ url('/projetos') }}">{!! __('navbar.projects') !!}</a>
            <a href="{{ url('/contato') }}">{!! __('navbar.contact') !!}</a>

            <!-- social media icons -->
            <x-icons.social-media href="{{ url('https://www.linkedin.com/in/btrz/') }}" target="_blank"
                aria-label="{!! __('navbar.instagram_aria_label') !!}" class="icon--linkedin-black" />

            <x-icons.social-media href="{{ url('https://www.behance.net/bridgetocross') }}" target="_blank"
                aria-label="{!! __('navbar.behance_aria_label') !!}" class="icon--behance-black" />

            <x-icons.social-media href="{{ url('https://patreon.com/btrz') }}" target="_blank"
                aria-label="{!! __('navbar.patreon_aria_label') !!}" class="icon--patreon-black" />

            <x-icons.social-media href="{{ url('https://github.com/underdogbytes') }}" target="_blank"
                aria-label="{!! __('navbar.github_aria_label') !!}" class="icon--github-black" />

            <x-icons.social-media href="{{ url('https://www.instagram.com/bridgetocross') }}" target="_blank"
                aria-label="{!! __('navbar.instagram_aria_label') !!}" class="icon--instagram-black" />
        </div>
    </section>
</nav>