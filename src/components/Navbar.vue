<template>
    <div class="primary-header flex">
        <div><img loading="lazy" src="@/assets/cat-signature.png" alt="logo" class="logo"></div>

        <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
            <!-- <span class="sr-only">Menu</span> -->
        </button>
        
        <nav>
            <ul class="primary-navigation flex" id="primary-navigation" data-visible="false">
                <li><a href=""><span aria-hidden="true">00</span>Home</a></li>
                <li><a href=""><span aria-hidden="true">01</span>Projects</a></li>
                <li><a href=""><span aria-hidden="true">02</span>About me</a></li>
                <li><a href=""><span aria-hidden="true">03</span>Contact</a></li>
                <!-- // TODO: toggle dark mode -->
            </ul>  
        </nav>
    </div>
</template>

<script>
export default {
    mounted(){
        const primaryNav = document.querySelector('.primary-navigation');
        const navToggle = document.querySelector('.mobile-nav-toggle');

        navToggle.addEventListener('click', () => {
            const visibility = primaryNav.getAttribute('data-visible')
            visibility === 'false' ? (primaryNav.setAttribute('data-visible', true), navToggle.setAttribute('aria-expanded', true)) : (primaryNav.setAttribute('data-visible', false), navToggle.setAttribute('aria-expanded', false))
        })
    }
}
</script>

<style scoped>
.flex{
    display: flex;
    gap: var(--gap, 2rem)
}
.logo{
    margin: 2rem;
    width: 100px;
}
.primary-header{
    align-items: center;
    justify-content: space-between;
}
.mobile-nav-toggle{
    display: none;
}
.primary-navigation{
    list-style: none;
    padding: 0;
    margin: 0;
    padding: 0.8rem;

    background: hsl(0 0% 0% / 0.5);
}

@supports(backdrop-filter: blur(1rem)){
    .primary-navigation{
        background: hsl(0 0% 100% / 0.1);
        backdrop-filter: blur(1rem); /* doesn't work on firefox :(( */
    }
}

.primary-navigation a{
    text-decoration: none;
    color: #ffffff;
}
.primary-navigation a > span{
    font-weight: 700;
    margin-inline-end: 0.75em;
}

@media (max-width: 35em) {
    .primary-navigation{
        --gap: clamp(1.5rem, 5vw, 3rem);
        position: fixed;
        z-index: 1000;
        inset: 0 0 0 30%;
        flex-direction: column;
        padding: min(30vh, 10rem) 2em;
        transform: translateX(100%);
        transition: transform 350ms ease-out; /* cool animation */
    }
    .primary-navigation[data-visible="true"]{
        transform: translateX(0%);
    }

    .mobile-nav-toggle{
        display: block;
        position: absolute;
        z-index: 9999;
        background: url("@/assets/icons/hamburguer.svg");
        background-size: contain;
        background-repeat: no-repeat;
        width: 2rem;
        aspect-ratio: 1;
        top: 2rem;
        right: 2rem;
        border: 0;
    }
    .mobile-nav-toggle[aria-expanded="true"]{
        background: url("@/assets/icons/exit.svg");
        background-size: contain;
        background-repeat: no-repeat;
    }
}
@media (min-width: 35em) and (max-width: 55em) {
    .primary-navigation a > span[aria-hidden]{
        display: none;
    }
    
}
@media (min-width: 55em){
    .primary-navigation{
        padding: 1rem;
        padding-inline: clamp(3rem, 5vw, 10rem);
    }
}
</style>