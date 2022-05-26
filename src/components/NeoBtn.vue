<template>
    <a href="#" class="btn--neon">Neon</a>
</template>
<style scoped>
.btn--neon{
    padding: 0.25em 1em;
    position: relative;

    border: rgb(255, 57, 186) 0.125em solid;
    border-radius: 0.25em;
    cursor: pointer;

    font-size: 2rem;
    font-family: "Balsamiq Sans", cursive;
    color: rgb(255, 57, 186);

    text-decoration: none;
    text-shadow:
        0 0 0.125em hsl(0 0% 100% / 0.3),
        0 0 0.45em rgb(255, 57, 186);
    box-shadow:
        inset 0 0 0.5em 0 rgb(255, 57, 186),
        0 0 0.5em 0 rgb(255, 57, 186);
}
.btn--neon::before{
    pointer-events: none;
    content: '';
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 100%;

    transform: perspective(1em) rotateX(40deg) scale(1, 0.35);
    filter: blur(1.5em);
    opacity: 0.7;

    background-color: rgb(255, 57, 186);
}
.btn--neon::after{
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    box-shadow: 0 0 2em 0.5em rgb(255, 57, 186);
    opacity: 0;
    transition: opacity 100ms linear;
    background-color: rgb(255, 57, 186);
    z-index: -1;
}
.btn--neon:hover,
.btn--neon:focus{
    background: rgb(255, 57, 186);
    color: rgb(255, 255, 255);
    text-shadow: none;
}
.btn--neon:hover::before,
.btn--neon:focus::before{
    opacity: 1;
}
.btn--neon:hover::after,
.btn--neon:focus::after{
    opacity: 1;
}
</style>