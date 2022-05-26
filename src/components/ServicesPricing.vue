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
                    <div v-for="service in serviceOptions" :key="service">
                        <input type="checkbox" :value="service.value" v-model="servicesChecked" />
                        <label class="services__options__label">{{service.label}} <span class="services__options__disclaimer">{{service.description}}</span></label>
                    </div>
                </div>
                <p class="fun-fact">**You can pick more than one!</p>
            </div>
            <div>
                <p>Average Price</p>
                <div class="services__price">
                    <span>R$</span>
                    <span>{{ totalPrice }}</span>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data(){
        return{
            serviceOptions: [
                {value: 700, label:'Web Development & Web Design', description:'(simple static page)'},
                {value: 1200, label:'Web Development', description:'(until 5 pages)'},
                {value: 2000, label:'Web Development', description:'(more than 5 pages)'},
                {value: 150, label:'UI/UX', description:'(single page)'},
                {value: 1500, label:'UI/UX', description:'(system)'},
                {value: 200, label:'Illustration', description:'(small size)'},
                {value: 400, label:'Illustration', description:'(medium size)'},
                {value: 600, label:'Illustration', description:'(large size)'},
            ],
            servicesChecked: [],
            totalPrice: 0
        }
    },
    watch: {
        servicesChecked: function (val) {
            let temp = 0
            val.forEach(element => { temp += element });
            this.totalPrice = temp
        }
    }
}
</script>
<style scoped>
.services__container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
}
.services__price span:first-child{
    margin: 0 0.25em 0 0;
    font-size: 1.5rem;
    font-weight: 300;
}
.services__price span{
    font-size: 2.5rem;
    font-weight: 600;
}
.services__options__label{
    font-size: 1rem;
    font-weight: 600;
}
.services__options__disclaimer{
    font-size: 0.8rem;
    font-weight: 300;
}
</style>