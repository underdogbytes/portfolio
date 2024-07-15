<section class="header-box">
    <div class="header-box__title">
        <h1>underdogbytes</h1>
        <p>Quando a <b>engenharia de software</b> se une ao <b>design</b></p>
    </div>

    <p>
        Uma dose dos melhores projetos da casa:
    </p>

    <div class="portfolio__gallery">
        @if(!empty($projects))
        @foreach($projects as $project)
        <div>
            <x-portfolio.gallery-item link="{{ url('/')}}/portfolio/{{$project['link']}}"
                imgUrl="{{asset($project['imgUrl'])}}" />
            <p>
                <b>Sobre o que é o projeto?</b>
                <br>
                {{ $project['description'] }}
            </p>
        </div>
        @endforeach
        @endif
    </div>

    <div style="width: 100%; display: flex; justify-content: center; margin: 4rem auto">
        <a href="/portfolio">
            <button>Ver todos os projetos</button>
        </a>
    </div>
</section>