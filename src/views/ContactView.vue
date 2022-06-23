<template>
  <Navbar />

    <div class="container--max">
      <div class="m-2">
        <div class="ghost"></div>
        <Title tag="how to" title="contact me?" />

        <CardGray title="📇">
          <template v-slot:content>
            <ul>
              <li>Blablabla I'm <i>UI Designer & Software engineer</i> 🌱🐛</li>
              <li>💼 I'm available for new projects, if you're interested in hiring me, feel free to send me an e-mail:
                <a href="mailto:beatriz_pereiralima@hotmail.com">beatriz_pereiralima@hotmail.com</a>
              </li>
            </ul>
          </template>
        </CardGray>

      </div>
    </div>

  <Footer />
</template>

<script>
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
import Title from '../components/Title.vue';
import CardGray from '../components/CardGray.vue';

export default {
  components: { Navbar, Footer, Title, CardGray }
}
</script>