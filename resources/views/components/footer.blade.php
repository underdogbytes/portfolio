<footer>
    <div class="inner">
        <div class="footer__row">
            <div class="footer__img__container">
                <img class="footer__img" src="{{ asset('images/illustrations/cat-signature.png') }}" />
            </div>
        
            <div class="footer__info">
                <div>
                    <h2 class="footer__title">Contato</h2>
                    <a href="mailto:underdogbytes@gmail.com">📧 underdogbytes@gmail.com</a>
                </div>
                <div>
                    <h2 class="footer__title">Social media</h2>
                    <div class="footer__social-media__icons">
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
                </div>
            </div>
        </div>
        <div>
            <a href="https://github.com/underdogbytes">
                Underdog Bytes - 2024
            </a>
            <p>
                desenvolvido com
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </p>
        </div>
    </div>
</footer>