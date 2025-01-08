<div class="header-box__title">
    <h1>{!! __($project['name']) !!}</h1>

    @if(isset($project['role']))
        <p>
            @foreach($project['role'] as $role)
            {!! __('projects.roles_title') !!}
            <br>
            <span>
                {!! __($role) !!} @if(!$loop->last), @endif
            </span>
            @endforeach
        </p>
    @endif
</div>