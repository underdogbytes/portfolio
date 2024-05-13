@extends('template.index')

@section('content')

<section class="hero" style="background-image: url('{{asset('assets/images/backgrounds/dark-forest.jpg')}}')">
  {{-- content --}}
  <div class="hero--manifesto__content_box">
    {{-- manifesto --}}
    <div class="hero__text_box">
      <h2>Olá amigos, conhecidos e desconhecidos! :D</h2>
      <p>
        Aqui deixo meus 2 centavos a quem interessar:
      </p>

      <ul>
        <li>
          PJotização é o caralho.
          <br>
          O mercado de trabalho tá uma merda pra todo mundo
          e a gente precisa se unir pra botar ordem na casa.
        </li>
        <li>
          Em país de terceiro mundo, faz favor de não encher o saco da pirataria.
          <br>
          Principalmente se for pirataria de conhecimento.
          Dependendo do livro técnico ou artigo que tu precisa, se for comprar, tu tá fodido.
        </li>
      </ul>
      <p>
        É isso amigos,
        bebam awa e cuidem uns dos outros ♡
      </p>
    </div>
  </div>
</section>

@endsection