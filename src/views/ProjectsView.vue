<template>
    <Navbar />
    <div class="container--max">
        <div class="m-2">
            <div class="ghost"></div>
            <Title tag="oooooops!" title="hold on the line!" />
            <p>I'm still working on this page, <i>come back later, alligator!</i> :D</p>
      </div>
    </div>
    <Footer />
    
</template>
<script>
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
import Title from '../components/Title.vue';

export default {
  components: { Navbar, Footer, Title }
}
</script>