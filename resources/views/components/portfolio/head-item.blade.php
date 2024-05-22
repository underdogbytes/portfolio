<div class="portfolio__header-info">
    <div>
        <h2>{{ $info['name'] }}</h2>
        <b>Sobre o projeto:</b>
        <br>
        {{ $info['description'] }}
    </div>

    {{-- Cargo --}}
    @if(isset($info['workedAs']))
    <div>
        <b>Cargo:</b>
        <br>
        @foreach($info['workedAs'] as $role)
        <span>
            {{ $role }} @if(!$loop->last),@endif
        </span>
        @endforeach
    </div>
    @endif

    {{-- Tecnologias utilizadas --}}
    @if(isset($info['techs']))
    <div>
        <b>Tecnologias utilizadas:</b>
        <br>
        @foreach($info['techs'] as $tech)
        <span>
            {{ $tech }}@if(!$loop->last),@endif
        </span>
        @endforeach
    </div>
    @endif

    {{-- Links --}}
    @if(isset($info['links']))
    <div class="portfolio__links_box">

        @if(isset($info['links']['prod']) && $info['links']['prod'])
        <a href="{{ $info['links']['prod'] }}" target="_blank">
            <button class="btn__icon-text">
                <img src="{{ asset('icons/eye-white.svg') }}" alt="Ícone de olho aberto" width="30">
                Projeto em produção
            </button>
        </a>
        @endif

        @if(isset($info['links']['gitRepo']) && $info['links']['gitRepo'])
        <a href="{{ $info['links']['gitRepo'] }}" target="_blank">
            <button class="btn__icon-text">
                <img src="{{ asset('icons/git-white.svg') }}" alt="Logo Git" width="30">
                Repositório do projeto
            </button>
        </a>
        @endif


        @if(isset($info['links']['behance']) && $info['links']['behance'])
        <a href="{{ $info['links']['behance'] }}" target="_blank">
            <button class="btn__icon-text">
                <img src="{{ asset('icons/behance-white.svg') }}" alt="Logo Behance" width="30">
                Projeto no Behance
            </button>
        </a>
        @endif
    </div>
    @endif
</div>