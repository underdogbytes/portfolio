<div class="portfolio__header-info">
    <div>
        <h2>{{ $info['name'] }}</h2>
        <b>Sobre o projeto:</b>
        <br>
        {{ $info['description'] }}
    </div>
    {{-- Links --}}
    @if(isset($info['links']))
    <div>
        <b>Links:</b>
        <ul>
            @if(isset($info['links']['prod']) && $info['links']['prod'])
            <li>
                Em ambiente de produção:
                <a href="{{ $info['links']['prod'] }}" target="_blank">
                    {{ $info['links']['prod'] }}
                </a>
            </li>
            @endif
            
            @if(isset($info['links']['gitRepo']) && $info['links']['gitRepo'])
            <li>
                Github:
                <a href="{{ $info['links']['gitRepo'] }}" target="_blank">
                    {{ $info['links']['gitRepo'] }}
                </a>
            </li>
            @endif
            
            
            @if(isset($info['links']['behance']) && $info['links']['behance'])
            <li>
                Behance:
                <a href="{{ $info['links']['behance'] }}" target="_blank">
                    {{ $info['links']['behance'] }}
                </a>
            </li>
            @endif
        </ul>
    </div>
    @endif

    {{-- Cargo --}}
    {{-- @if(isset($info['workedAs']))
    <div>
        <b>Área de atuação:</b>
        <br>
        @foreach($info['workedAs'] as $role)
        <span>
            {{ $role }} @if(!$loop->last),@endif
        </span>
        @endforeach
    </div>
    @endif --}}

    {{-- Tecnologias utilizadas --}}
    {{-- @if(isset($info['techs']))
    <div>
        <b>Tecnologias utilizadas:</b>
        <br>
        @foreach($info['techs'] as $tech)
        <span>
            {{ $tech }}@if(!$loop->last),@endif
        </span>
        @endforeach
    </div>
    @endif --}}
</div>