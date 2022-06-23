<template>
  <Navbar />

    <div class="container--max container--max--about">
      <div class="about">
        <div class="about__ghost"></div>
        <Title tag="about" title="Hello!" />

        <div class="about__main">
          <div class="about__card">
            <p class="about__title">💻 Professional</p>
            <ul>
              <li>Blablabla I'm <i>UI Designer & Software engineer</i> 🌱🐛</li>
              <li>💹 Career objectives: being a Senior and launching my app BirdHome</li>
              <li>☕ My portfolio:
                <ul>
                  <li>Github <a target="_blank" href="https://github.com/wolfhaltz/">@wolfhaltz</a></li>
                  <li>
                    This website github repo:
                    <a target="_blank" href="https://github.com/wolfhaltz/portfolio">@wolfhaltz/portfolio</a>
                  </li>
                  <li>UI/UX: <a target="_blank" href="https://www.behance.net/bridgetocross">@bridgetocross</a></li>
                  <li>Illustrations: <a target="_blank" href="https://www.deviantart.com/losingmybridge">@losingmybridge</a></li>
                </ul>
              </li>
              <li>📚 I'm currently learning React & Flutter.</li>
              <li>💼 I'm available for new projects, if you're interested in hiring me, feel free to send me an e-mail:
                <a href="mailto:beatriz_pereiralima@hotmail.com">beatriz_pereiralima@hotmail.com</a>
              </li>
            </ul>

          </div>

          <div class="about__card">
            <p class="about__title">🌸 About me 🦕🌠</p>
            <ul>
              <li>📚 I believe in long term learning</li>
              <li>🧠 Loves to study human brain</li>
              <li>📚 Currently learning japanese</li>
              <li>📺🕹️🪐 I love to talk about science, astronomy, games, music and sharks 🦈</li>
              <li>📷 I like to shoot</li>
              <li>⚔️ Enjoy playing RPG as rogue elf</li>
              <li>🎧 Indie is my passion</li>
              <li>🍜 I like to cook (yakissoba mainly hahaha)</li>
              <li>🍣 I love sushi</li>
              <li>🍫 And have a serious problem with chocolate hahaha</li>
              <li>🌸 Memento mori</li>
            </ul>
          </div>

          <div class="about__card">
            <p class="about__title">📺 Favourite TV Shows</p>
            <ul>
              <li>Supernatural</li>
              <li>Dorohedoro</li>
              <li>Spy x Family</li>
              <li>Naruto (young)</li>
              <li>Constantine</li>
            </ul>
          </div>

          <div class="about__card">
            <p class="about__title">🖌️ Favourite Visual Artist</p>
            <ul>
              <li>Hayao Miyazaki</li>
              <li>Junji ito</li>
              <li>Salvador Dalí</li>
            </ul>
          </div>

          <div class="about__card">
            <p class="about__title">🥁 Favourite Bands / Artists</p>
            <ul>
              <li>Hozier</li>
              <li>21 Pilots</li>
              <li>Shawn James</li>
              <li>Billie Eilish</li>
              <li>or:</li>
              <li><a href="https://open.spotify.com/user/22agzvjyx4zninl5oba3tfcty">check my spotify profile :D</a></li>
            </ul>
          </div>

          <div class="about__card">
            <p class="about__title">🐱‍👓 Favourite Books</p>
            <ul>
              <li>Brief history of everything - Bill Bryson</li>
              <li>Stephen King stuff</li>
              <li>Sapiens - Yuval Noah Harari</li>
              <li>or:</li>
              <li><a href="https://www.skoob.com.br/usuario/8735559">check my skoob profile</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  <Footer />
</template>

<script>
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
import Title from '../components/Title.vue';

export default {
  components: { Title, Navbar, Footer }
}
</script>

<style>
.about{
  margin: 2rem;
}
.about__ghost{height: 10em}
.about__main{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
  gap: 2em;;
}
.about__card{
  padding: 2rem;
  border-radius: 0.5em;
  background: #f0f0f0;
  color: #212121;
}
.about__title{
  margin: 0 0 1em 0;
  font-size: clamp(1rem, 10vw, 2rem);
}
.popcorn-image{
  width: 250px;
  float: left;
  shape-outside: url(../assets/icons/popcorn.png);
  shape-margin: 1rem;
}
.about__card > ul{
  padding: 0em;
}
.about__card ul > li{
  list-style: none;
  margin: 1em 0;
}
.about__card ul a{
  font-weight: 600;
  color: rgb(40, 193, 55);
  text-decoration: none;
}
</style>
