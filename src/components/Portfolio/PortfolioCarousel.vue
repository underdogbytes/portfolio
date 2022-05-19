<template>
    <div class="carousel-container">
        <div class="carousel-scroller">
            <div class="carousel-group" id="group-1">
                <a class="previous" href="#group-2">
                    <svg>
                        <use href="#previous"></use>
                    </svg>
                </a>
                <div class="carousel-element"><img src="@/assets/me.jpg" alt=""></div>
                <div class="carousel-element"><img src="@/assets/me.jpg" alt=""></div>
                <div class="carousel-element"><img src="@/assets/me.jpg" alt=""></div>
                <a class="next" href="#group-2">
                    <svg>
                        <use href="#next"></use>
                    </svg>
                </a>
            </div>    
            <!-- group 2 -->
            <div class="carousel-group" id="group-2">
                <a class="previous" href="#group-1">
                    <svg>
                        <use href="#previous"></use>
                    </svg>
                </a>
                <div class="carousel-element"><img src="@/assets/me.jpg" alt=""></div>
                <div class="carousel-element"><img src="@/assets/me.jpg" alt=""></div>
                <div class="carousel-element"><img src="@/assets/me.jpg" alt=""></div>
                <a class="next" href="#group-1">
                    <svg>
                        <use href="#next"></use>
                    </svg>
                </a>
            </div>
            <div class="carousel-indicators">
                <div></div>
                <div></div>
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
<style scoped>
.carousel-container{
    padding: 3rem 0;
    position: relative;
}
.carousel-scroller,
.carousel-group{
    display: grid;
    gap: 0.5rem;
    grid-auto-flow: column;
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
:where(.next, .previous):hover{ background: rgb(0 0 0 / 0.3); }
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
.carousel-group:nth-child(1):target ~ .carousel-indicators > *:nth-child(1) { opacity: 1; }
.carousel-group:nth-child(2):target ~ .carousel-indicators > *:nth-child(2) { opacity: 1; }

</style>