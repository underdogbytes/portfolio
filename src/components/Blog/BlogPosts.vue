<template>
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
</template>
<style scoped>
.blog__container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    grid-gap: 1rem;
    margin: 1rem;
}
.blog__card{
    margin: auto;
    max-width: 280px;
    height: 400px;
    box-shadow: 2px 2px 4px #424242;
}
.blog__card__img{
    height: 200px;
    width: 100%;
    object-fit: cover;
    background-color: #a1a1a1;
}
.blog__card__text{
    padding: 1rem;
}
.blog__card__title{
    font-weight: bold;
}
.blog__card__description{
    margin: 1rem;
    font-size: 0.8rem;
}
.blog__card__link{
    text-align: center;
    font-size: 0.9rem;
    font-weight: 600;
    color: #424242;
}
</style>