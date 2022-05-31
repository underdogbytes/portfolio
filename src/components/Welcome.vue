<template>
    <header>
        <div class="header__text">
            <div>
                <p class="header__title">btrz</p>
                <p class="header__subtitle">designer & developer</p>
                <div class="header__social">
                    <a href="https://github.com/wolfhaltz" target="_blank">
                        <img class="header__social__icon" src="@/assets/icons/github.svg" alt="Github">
                    </a>
                    <a href="https://www.behance.net/bridgetocross" target="_blank">
                        <img class="header__social__icon" src="@/assets/icons/behance.svg" alt="Behance">
                    </a>
                    <a href="https://www.linkedin.com/in/btrz" target="_blank">
                        <img class="header__social__icon" src="@/assets/icons/linkedin.svg" alt="LinkedIn">
                    </a>
                </div>
            </div>
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
    filter: blur(0.6em) grayscale(50%);
}
.header__text{
    position: sticky;
    top: 10%;
    left: 30%;
    margin: 3em;
    padding: 0 0 3em 0;
    max-width: 400px;
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
    font-size: 8rem;
    font-weight: bold;
    color: #000000;
}
.header__subtitle{
    font-size: 3rem;
    font-weight: bold;
    color: rgb(255, 255, 255);
}
.header__img{ display: none; }

.header__social{
    margin: 2em 0 0 0;
    column-width: 4em;
    column-rule: 1px solid rgba(255, 255, 255, .25);
}
.header__social__icon{
    max-width: 3em;
    margin: auto;
}

@media screen and (min-width: 1000px){
    .header__text{
        position: absolute;
        left: 30%;
        top: 25%;
        max-width: 400px;
    }
    .header__title{ font-size: 12rem; }
    .header__subtitle{ font-size: 3.5rem; }
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