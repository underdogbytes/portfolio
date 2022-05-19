<script setup>
import Title from './Title.vue'
</script>
<template>
    <section>
        <Title tag="Services & pricing" title="How can I help u?" />
        <div class="services__container">
            <div>
                <p>Pick the services you need</p>
                <div class="services__options">
                    <div>
                        <input type="checkbox" name="" id="">
                        <label>Web Development</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label>Web Design</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label>Illustration</label>
                    </div>
                </div>
                <p class="fun-fact">**You can pick more than one!</p>
            </div>
            <div>
                <p>Average Price</p>
                <div class="services__price">
                    <span>R$</span>
                    <span>1.500,00</span>
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped>
.services__container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
}
.services__price span:first-child{
    font-size: 1.5rem;
    font-weight: 300;
}
.services__price span{
    font-size: 2.5rem;
    font-weight: 600;
}
</style>