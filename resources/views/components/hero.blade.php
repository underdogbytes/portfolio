<section class="hero" style="background-image: url('{{ $bg}}')">
    {{-- content --}}
    <div class="container">
        <div class="hero__content_box">
            {{-- about --}}
            <div>
                <h1>
                    Beatriz Lima
                </h1>
                <p>
                    Inquieta, construo coisas. Pondero sobre o mundo ao meu redor desde 1996.
                </p>
            </div>

            {{-- social links --}}
            <div class="hero__links">
                <a href="github.com/underdogbytes/" target="_blank">
                    <img src="{{asset('images/icons/github.svg')}}" alt="github icon" />
                </a>
                <a href="https://www.linkedin.com/in/btrz/" target="_blank">
                    <img src="{{asset('images/icons/linkedin.svg')}}" alt="linkedin icon" />
                </a>
            </div>

            <a href="/projetos">
                <button class="hero__btn">Conheça meu trabalho</button>
            </a>
        </div>
    </div>
</section>