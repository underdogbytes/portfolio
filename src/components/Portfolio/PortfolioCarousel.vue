<template>
    <div class="carousel-container">
        <div class="carousel-scroller">
            <div class="carousel-group" v-for="carousel in carousels" :key="carousel" :id="carousel.id">
                <a class="previous" :href="carousel.previous">
                    <svg><use href="#previous"></use></svg>
                </a>
                <div class="carousel-element" v-for="carouselElement in carousel.carouselElement" :key="carouselElement">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img :src="carouselElement.img" :alt="carouselElement.alt">
                            </div>
                            <div class="flip-card-back">
                            <h1>{{ carouselElement.title }}</h1>
                            <p>{{ carouselElement.description }}</p>
                            <!-- <router-link :to="`/${carouselElement.link}`">Go to the project page</router-link> -->
                            </div>
                        </div>
                    </div>
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
                        {
                            title: 'Development',
                            description: 'The awesome designer Ito created the layout and I developed this website using HTML/CSS/JS',
                            link: 'tempestade-criativa',
                            img: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgSF0tGZ8jEAGAFbY5uYkKFOg81A_7czLioBbwhfsQtjMx6njdtad_iOKCA2IHOIIQr04kNU5rBPYQCTisjX3zqgWIqyee6h9nJMEbfBc0xeRb-mkCXxIl6e5EqMpIFdzb6vJRSxCBl5g11vhQ4VG29sYnp_dN3_ClgaAkRyOBIKEVhVPSV9o0QYkz4ig/s1080/tempestade-criativa.png',
                            alt: 'Tempestade Criativa'
                        },
                        {
                            title: 'Development',
                            description: 'The designer Bruno created the layout and I implemented this e-commerce using OpenCart. I also created this theme from zero :)',
                            link: 'colecoes-fauna-do-brasil',
                            img: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiKcvHF2xNuWb6NR1_mt2NUORGU6tg6vYmC0HlDSY4DiOUJZPVXrhmO1etB4IYVmMb1hXAHdTLyQn-fZt-sqm49EeaFy5nDrRs-oDp1ZjXYX38IxsUSzWSCx3IZ7VQmkcS5KaYv7JB-2tAFIAVKwGaHZdV03mDSLlcrbvD3-b6WNSZ2diCIFqWgx75z_Q/s1080/colecoes-fauna-do-brasil.png',
                            alt: 'Coleções Fauna do Brasil'
                        },
                    ]
                },
                {
                    id: 'group-2',
                    previous: '#group-1',
                    next: '#group-3',
                    carouselElement: [
                        {
                            title: 'Cat Signature',
                            description: 'This is an illustration made with Photoshop using a Wacom',
                            link: 'cat-signature',
                            img: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjkpdCgY0x06bxq-j5ydCSUSEAF8LnMWxWXEfbn22zke6xItdz0a3cg8cQYWiEqB5xLk2VwGiFdKJvrJMwBgk8XafV54cvE_VkTE5AI6t9wCvLGRxuSwr3HYPRcqvctQI9traJFBK8qaZuPcTreyGBKtUg3RmPGzovxmHGH3fYvcbCNxzN2vDvJsV4KKA/s1080/cat-signature.png',
                            alt: 'Illustration: Cat Signature'
                        },
                        {
                            title: 'Show Gospel',
                            description: 'The design was from agency Publysh and I developed the website using PHP and Laravel',
                            link: 'show-gospel',
                            img: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj9rweV32qTGxJLpOCwL_gnRsieRlouPz6uPV6cDqwDKZZKVihtG5yd1Sg7dO8lMFBAWW4WY-OnOcdZvE12pZXGI0GYy_ehb6LWA0V0_7Gqd6uyXjQ7y2QYIkVn7CUshWyzQGngYm1Y8_1DbgimwsaN3uJNr8eMGW2srTaAktx-O8P_WfQ5VrKHzdgjkA/s1080/show-gospel.png',
                            alt: 'Show Gospel'
                        },
                    ]
                },
                {
                    id: 'group-3',
                    previous: '#group-2',
                    next: '#group-1',
                    carouselElement: [
                        {
                            title: 'Coming soon!',
                            description: 'Coming soon art made with Canva',
                            link: 'coming-soon',
                            img: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEht93C8qg3uUSR0LH_oFXQ0fzg3zOW35xURb41Sxi6CrY23ylMn_bz4kfa1S52SYOpn7cxyeZTxmYEW_kZG1EwwRLVY12s9SDRoEpgC1WZPs_QYWegoown8lPdJwPxL71HZZRA9uHxsITofY6YWzfD5CM-_b9Oea3BFgkrl_H450gLzHSnfhFDFHG-sPQ/s1080/coming-soon.png',
                            alt: 'Coming Soon'
                        },
                        {
                            title: 'Coming soon!',
                            description: 'Coming soon art made with Canva',
                            link: 'coming-soon',
                            img: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEht93C8qg3uUSR0LH_oFXQ0fzg3zOW35xURb41Sxi6CrY23ylMn_bz4kfa1S52SYOpn7cxyeZTxmYEW_kZG1EwwRLVY12s9SDRoEpgC1WZPs_QYWegoown8lPdJwPxL71HZZRA9uHxsITofY6YWzfD5CM-_b9Oea3BFgkrl_H450gLzHSnfhFDFHG-sPQ/s1080/coming-soon.png',
                            alt: 'Coming Soon'
                        },
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
    margin: 4em 0;
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
.carousel-element > div{
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

/* flip card */
.flip-card {
  background-color: transparent;
  perspective: 1000px; /* the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the back side */
.flip-card-back{
    padding: 2em;
    background-color: rgb(73, 73, 73);
    color: white;
    transform: rotateY(180deg);
}

@media screen and (max-width: 600px){
    .carousel-group{
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        grid-auto-flow: initial;
    }
}
</style>