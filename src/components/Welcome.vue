<template>
    <header>
        <div class="header__text">
            <p class="header__title">btrz</p>
            <p class="header__subtitle">designer & developer</p>
        </div>
        <img class="header__img" src="@/assets/welcome-img.png" alt="">
    </header>
    <div class="header__bg"></div>
</template>
<style scoped>
header{
    position: relative;
    min-height: 100vh;
}
.header__bg{
    position: absolute;
    top: 0;
    z-index: -2;
    height: 100vh;
    width: 100%;
    background-image: url(@/assets/me.jpg);
    background-size: cover;
    background-position: center;
    filter: blur(0.5em) grayscale(50%);
}
.header__text{
    position: absolute;
    left: 30%;
    top: 25%;
    width: 400px;
    opacity: 0.9;
    text-shadow:
        0 0 0.125em hsl(0 0% 100% / 0.3),
        0 0 0.45em rgb(0, 0, 0);
}
.header__text:hover{
    opacity: 1;
    text-shadow:
        0 0 0.125em hsl(0 0% 100% / 0.3),
        0 0 0.45em rgb(255, 36, 178);
}
.header__title{
    font-size: 12rem;
    font-weight: bold;
    color: #212121;
}
.header__subtitle{
    font-size: 3.5rem;
    font-weight: bold;
    color: rgb(255, 255, 255);
}
.header__img{
    display: none;
}

@media screen and (min-width: 1000px){
    .header__img{
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        shape-outside: url(../assets/welcome-img.png);
        z-index: -1;
        max-width: 40vw;
    }
}
</style>