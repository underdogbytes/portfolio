<script setup>
import Title from '../Title.vue'
import PortfolioCards from './PortfolioCards.vue';
</script>
<template>
    <section>
        <Title tag="portfolio" title="Stuff I made" />
        <p class="portfolio__description">Hover the images to see more about each project ;)</p>
        <PortfolioCards />
    </section>
</template>

<style>
.portfolio__description{
    margin: 5em 0;
}
</style>