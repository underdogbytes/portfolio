<template>
    <div class="carousel-container">
        <div class="carousel-scroller">
            <div class="carousel-group" v-for="carousel in carousels" :key="carousel" :id="carousel.id">
                <a class="previous" :href="carousel.previous">
                    <svg><use href="#previous"></use></svg>
                </a>
                <div class="carousel-element" v-for="carouselElement in carousel.carouselElement" :key="carouselElement">
                    <img :src="`/assets/${carouselElement.img}`" alt="carouselElement.alt">
                </div>
                <a class="next" :href="carousel.next">
                    <svg><use href="#next"></use></svg>
                </a>
            </div>
            <div class="carousel-indicators">
                <div  v-for="carouselLength in carousels" :key="carouselLength"></div>
            </div>
        </div>
        <svg style="display: none;">
            <symbol id="next" viewBox="0 0 256 512">
                <path fill="white"
                d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
            </symbol>

            <symbol id="previous" viewBox="0 0 256 512">
                <path fill="white"
                d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
            </symbol>
        </svg>
    </div>
</template>

<script>
export default {
    data(){
        return{
            carousels: [
                {
                    id: 'group-1',
                    previous: '#group-3',
                    next: '#group-2',
                    carouselElement: [
                        {img: 'projects/tempestade-criativa.png', alt: 'Tempestade Criativa'},
                        {img: 'projects/colecoes-fauna-do-brasil.png', alt: 'Coleções Fauna do Brasil'},
                    ]
                },
                {
                    id: 'group-2',
                    previous: '#group-1',
                    next: '#group-3',
                    carouselElement: [
                        {img: 'illustrations/cat-signature.png', alt: 'Illustration: Cat Signature'},
                        {img: 'projects/show-gospel.png', alt: 'Show Gospel'},
                    ]
                },
                {
                    id: 'group-3',
                    previous: '#group-2',
                    next: '#group-1',
                    carouselElement: [
                        {img: 'coming-soon.png', alt: 'Coming Soon'},
                        {img: 'coming-soon.png', alt: 'Coming Soon'},
                    ]
                }
            ]
        }
    }
}
</script>

<style scoped>
.carousel-container{
    position: relative;
}
.carousel-scroller,
.carousel-group{
    display: grid;
    grid-auto-flow: column;
    gap: 0.5em;
}
.carousel-scroller{
    overflow-x: hidden;
    scroll-behavior: smooth;
    grid-auto-columns: 100%;
    padding: 0 3rem;
    scroll-padding-inline: 3rem;
}
.carousel-group{ grid-auto-columns: 1fr; }
.carousel-element{
    border-radius: 0.25rem;
    overflow: hidden;
}
.carousel-element > img{
    width: 100%;
    aspect-ratio: 16 / 16;
    object-fit: cover;
}
.next,
.previous{
    display: none;
    align-items: center;
    z-index: 10;
    position: absolute;
    width: 3rem;
    padding: 1rem;
    background: rgb(0 0 0 / 0);
    opacity: 0;
}
.next{
    right: 0;
    top: 0;
    bottom: 0;
}
.previous{
    left: 0;
    top: 0;
    bottom: 0;
}
.carousel-group:first-child :where(.next, .previous){ display: flex; }
.carousel-scroller:hover :where(.next, .previous){ opacity: 1; }
:where(.next, .previous):hover{ background: rgba(0, 0, 0, 0.526); }
:where(.next, .previous) > img{ width: 2rem; }
:where(.next, .previous):hover > img{
    transition: transform 75ms linear;
    transform: scale(1);
}
:where(.next, .previous):hover > img{ transform: scale(1.2); }
.carousel-group:target :where(.next, .previous){ display: flex; }
.carousel-indicators{
    position: absolute;
    display: flex;
    gap: 2px;
    top: -2rem;
    right: 2rem;
}
.carousel-indicators > *{
    width: 1.5rem;
    height: 5px;
    background-color: #424242;
    opacity: 0.5;
}
.carousel-group:nth-child(1):target ~ .carousel-indicators > *:nth-child(1),
.carousel-group:nth-child(2):target ~ .carousel-indicators > *:nth-child(2),
.carousel-group:nth-child(3):target ~ .carousel-indicators > *:nth-child(3){ opacity: 1; }

@media screen and (max-width: 600px){
    .carousel-group{
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        grid-auto-flow: initial;
    }
}
</style>