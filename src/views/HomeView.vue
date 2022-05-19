<script setup>
</script>

<template>
    <header>
        <div>
            <p class="header__title">btrz</p>
            <p class="header__subtitle">designer & developer</p>
        </div>
    </header>
    <!-- portfolio -->
    <section>
        <div class="title__container">
            <p class="title__tag">Portfolio</p>
            <p class="title">Stuff I mae</p>
        </div>
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
        </div>
        <p class="fun-fact">random but: did u know that the carousel down below was made with pure CSS!? :D</p>
    </section>
    <!-- services & pricing -->
    <section>
        <div class="title__container">
            <p class="title__tag">Services & pricing</p>
            <p class="title">How can I help u?</p>
        </div>
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
    <!-- blog -->
    <section>
        <div class="title__container">
            <p class="title__tag">Blog</p>
            <p class="title">Recent posts</p>
        </div>
        <div class="blog__container">
            <div class="blog__card">
                <img class="blog__card__img" src="@/assets/me.jpg" alt="">
                <div class="blog__card__text">
                    <p class="blog__card__title">Lorem ipsum dolor sit amet, consec terur adipiscing elit</p>
                    <p class="blog__card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis...</p>
                    <a href="#!" class="blog__card__link"><p>Read More</p></a>
                </div>
            </div>
            <div class="blog__card">
                <img class="blog__card__img" src="@/assets/me.jpg" alt="">
                <div class="blog__card__text">
                    <p class="blog__card__title">Lorem ipsum dolor sit amet, consec terur adipiscing elit</p>
                    <p class="blog__card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis...</p>
                    <a href="#!" class="blog__card__link"><p>Read More</p></a>
                </div>
            </div>
            <div class="blog__card">
                <img class="blog__card__img" src="@/assets/me.jpg" alt="">
                <div class="blog__card__text">
                    <p class="blog__card__title">Lorem ipsum dolor sit amet, consec terur adipiscing elit</p>
                    <p class="blog__card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis...</p>
                    <a href="#!" class="blog__card__link"><p>Read More</p></a>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <p>Lima, Beatriz 2022 - All rights reserved</p>
    </footer>

    <svg>
        <symbol id="next" viewBox="0 0 256 512">
            <path fill="white"
            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
        </symbol>

        <symbol id="previous" viewBox="0 0 256 512">
            <path fill="white"
            d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
        </symbol>
    </svg>
</template>
