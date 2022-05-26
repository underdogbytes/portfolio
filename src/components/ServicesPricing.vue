<script setup>
import Title from './Title.vue'
</script>
<template>
    <section>
        <Title tag="Services & pricing" title="How can I help u?" />
        <div class="services__container">
            <div class="services-choice">
                <p class="services__container__text">Pick the services you need to see the average price of the work:</p>
                <label class="services__form-group" v-for="service in serviceOptions" :key="service">
                    {{service.description}}
                    <span class="services__options__disclaimer">{{service.label}}</span>
                    <input type="checkbox" :value="service.value" v-model.lazy="checkedServices" class="services__checkbox" />
                    <span class="checkmark"></span>
                </label>
                <p class="fun-fact">**You can pick more than one!</p>
                <p class="fun-fact">**The values are just my average price ;)</p>
            </div>
            <div class="average-price">
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
                {value: 700, label:'Web Development', description:'Simple static page'},
                {value: 1200, label:'Web Development', description:'Website until 5 pages'},
                {value: 2000, label:'Web Development', description:'Website with more than 5 pages'},
                {value: 100, label:'UI/UX', description:'Prototype single page'},
                {value: 1500, label:'UI/UX', description:'Prototype a whole system'},
                {value: 450, label:'value for create or rebuild', description:'Logo'},
                {value: 200, label:'value for single illustration', description:'Illustration'},
            ],
            checkedServices: []
        }
    },
    computed: {
        totalPrice() {
            let price = 0
            this.checkedServices.forEach(element => { price += element });
            return price
        }
    }
}
</script>
<style scoped>
.services__container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}
.services-choice{ margin: auto; }
.services__form-group{
  display: block;
  position: relative;
  padding-left: 1.3em;
  margin: 0 0 0.5em 0;
  cursor: pointer;
  font-size: 1.2rem;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.services__form-group input {
  position: absolute;
  height: 0;
  width: 0;
  cursor: pointer;
  opacity: 0;
}
.checkmark {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 1.1em;
  width: 1.1em;
  background-color: #eee;
  border-radius: 0.3em;
  border: 0.01em solid #212121;
}
.services__form-group:hover input ~ .checkmark { background-color: #ccc; }
.services__form-group input:checked ~ .checkmark { background-color: #2196F3; }
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.services__form-group input:checked ~ .checkmark:after { display: block; }
.services__form-group .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

/* average price */
.average-price{
    margin: auto;
    font-size: 2rem;
    color: rgb(106, 140, 255);
}
.services__price span:first-child{
    margin: 0 0.25em 0 0;
    font-size: 2rem;
    font-weight: 300;
}
.services__price span{
    font-size: 5rem;
    font-weight: 600;
}
.services__container__text{
    margin: 0 0 1.5em 0;
    font-weight: 600;
}
.services__options__disclaimer{
    font-size: 0.8rem;
    font-weight: 300;
}
.services__checkbox{
    height: 25px;
    width: 25px;
    background-color: #eee;
}
</style>