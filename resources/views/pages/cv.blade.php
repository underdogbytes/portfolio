@extends('template.index')

@section('content')
<section class="container">
  <h1>Curriculum Vitae</h1>

  {{-- prog --}}
  <div>
    <h2>Me encontra <small>(ou deixa eu te encontraaaar)</small></h2>
    <details open>
      <summary>
        Tecnologia da Informação
      </summary>
      <ul class="cv__links_list">
        <a href="https://github.com/underdogbytes/" target="_blank">
          <li>Github</li>
        </a>
        <a href="https://leetcode.com/u/underdogbytes/" target="_blank">
          <li>Leetcode</li>
        </a>
        <a href="https://learn.microsoft.com/pt-br/users/bridgetocross/" target="_blank">
          <li>Microsoft Learn</li>
        </a>
      </ul>
    </details>
  </div>

  {{-- design --}}
  <div>
    <details open>
      <summary>
        Design & Art
      </summary>
      <ul class="cv__links_list">
        <a href="https://www.behance.net/bridgetocross" target="_blank">
          <li>Behance</li>
        </a>
        <a href="deviantart.com/losingmybridge" target="_blank">
          <li>Deviantart</li>
        </a>
        <a href="patreon.com/btrz" target="_blank">
          <li>Patreon</li>
        </a>
      </ul>
    </details>
  </div>
</section>
@endsection