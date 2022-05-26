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
                            <p>{{ carouselElement.link }}</p>
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
                            link: '',
                            img: 'https://lh3.googleusercontent.com/EagVHmlNpyIMhNtZC5seiQIBih6uxMkt53XqjmUIaIwdhj_ISQa7tVZiDF6B1quCVsuzY7bYCljrpLzJMcSyYQU8lNtZiiyvvL9mc4Ysa6Ghha93V3FZcmqk6HcznU2EOO-XqIIO2I4DEBCcPVG93Br9Fl_vV6IQkogrxINvi4p3xqcPHiMU4Iz_dqrwrymqz1PnTZPVC8N5U5qNQlWN0tbyq29_KB-5YFRVCdoUdMJsAmaUit43Oqyk2EOnIJIj8Zyoc_JOR_IGcw9EHdWKO-oU1PTm1HAe9AH8HGbrE1XiP6lSHY-cohz_nLogEmxMCxik2Ob9Xl3iVXFWfmhygI7b4s4dfQ6HX6DZRfKPoEzqzKG5qIPJnTBI5n5yczCaoJqlatXxrBMOKftfpUmZDhqAC2kww1klLa7QQ9b6iSlESV1foEc3OQIYv0FZpqsAqhPYFK1Bw4hgHgCpRpTnb5N38kWzL0AU3Fz1AEHFoYq0-x3xM35rSfvCfj6GlK6xvT7LDrg8KS2KVnF2WECmJGAuWDmHhVco8iSLVVhWbiBc9AjurpuKZShiTOAwqmvWtBiXCoyK6Dil-orETyf10e9wcXECrwTEHfVpf60oLYozYXu3VAIlnphieruKwgNBfDzCSLLwju-Jl5jLXahs1GBgFkLinHW4n2D7UIPx3Kaj1iOaixXzgmEjMmqTlsjQ0FexGFShuhwN6Z1Ty_aX2S-0BZ-uNZw0Ac5Wr6YlrQh1uu3LQgY0Ik6c8YIBN98=s970-no?authuser=0',
                            alt: 'Tempestade Criativa'
                        },
                        {
                            title: 'Development',
                            description: 'The designer Bruno created the layout and I implemented this e-commerce using OpenCart. I also created this theme from zero :)',
                            link: '',
                            img: 'https://lh3.googleusercontent.com/moA2VVmdNMVkvGHBXAM3nTgl0C-hUbMBpzLHyIH5h53U6JnfbeGlvPjARgbznCtP8MN0JXDk9OB9ri4_kjg2sK_NB_j0O4MyHg4vaSQgko3GY2CqqYjtFc010fI88g2DXYfUOnYri1eNCtlTaeWmMriaYNF5ussYhAP4sYa56SW6jvYi0FqFIckVe_OxqA5YFeCs7xRqS8EZZmCWqdUUa9OtZVf_AflqhbnHVk0a1dNO4QNiWfp9zQzuMEdR5RsHNS623PKrtRSfoavXobfW0spTHE02DWrPOgxXD8H3fCtklJUeCr9Ib6mBRQfOl9k2Fy2FklA5Sby9xX-dzbzAxpVZXlekyhE9l3E8uGR2FVJHNJ94Kun2cXilQFw1vY3r7zUTTaknwW6jEQbhDRUXgaqX8Ju8UDUZHuR4AAg8EIXxNlJGfF7F3FDf-8xjpR6IO1lcl-oORSyipPH-n3SBugV8XBVphskqH_cW3LYPamjgw3NwO6VmKh69vLJLLH7KSLo1mWQEe9NrL1Xi-mIibvsTkSXeqRbvHCXLucJhrw8ELAC_vtuUJ2anIAQ5UJcx99DBP8xtYrkiG60MLDbv66RchWxjFsz-1qRLDiI2iWNBs0KJO8WIQg3f_C8wW7sgpNUVJMUrCmgfrp69lLGfEGT9sS-yVWJynlIdmJQ5-F711xYRTFUrfJf0tkKQfbPRnu--3OlUHito9MMfYwdVDnCHGmuTxLyGE8MEr_uCCGw6F02Yj6XG9EiccquF2a0=s970-no?authuser=0',
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
                            link: '',
                            img: 'https://lh3.googleusercontent.com/npGycdzm0eulW8iKbgrjMe3s7SUL7d6suusmxB20keeJF8rLxtmyZjI8opY0iZBJjU9gNlYi7j5yQx3vyHqongSZRCPKtUirJZrppCMxwoYdXrGEnKCQdOSK_298-X_tmRJg6sdljugl9_nPBZhRCLltndcKQP0HOa83hkBByBgRAqAvWL1-2BxanpRTgnKJx1lTzDM9bYnOBoGSqVPviSD1QSebnrVKVQQ0pYN4Brvx8im3zBHbAX5U_eQkzD8rLIcyioXJF9cEJSvja58F2ajSJdkqBWP9ixY0trBm4PjdtrliYYRQdLpAw9wDY9YWuOAwoSgEsJLDdMT6RfS_K1Z0CoCQs4OKaWrLUsVTSb4p3yCxdjwz7b2imE7hwrRlhiBE9focEX3JoWld2EVNzQIxjb0JGwu6PZ-d7mNMiWSRS_F_xdWZwKZuB0ADe4Cmxu5kaUKY4ltJyGOtIEpSlS0x1osdrHXVGdCQM6VVGcQj0Fnh3Gw-YsIKrWJcISq3OFRnGjwjGqcGNJ38MCvg6mNnx06nOwLE1XyEaW6Dmc5iPwy_LGLH4_Mz7qxYX_HMloA7dd6RKLl2G6WfpmA0mMEIrq1v449LBkuwXq7ZAtTTEiNaxbUVPpR2aAvHpcYmVXAlYHMD03urJTzzCrZZjFdsN7aB69JQJE-J5LZmagquPx_J6JJt9uMmIQ1sSberGq3PwGiIcDfr4yHxLciMHaWwVefZftEX2QRQP_Xq2O9mQ66OjCVWb66T0aUy3sY=s970-no?authuser=0',
                            alt: 'Illustration: Cat Signature'
                        },
                        {
                            title: 'Show Gospel',
                            description: 'The design was from agency Publysh and I developed the website using PHP and Laravel',
                            link: '',
                            img: 'https://lh3.googleusercontent.com/WOU5YeEZXJZBrjPhH3PIymkvTgW3wo7ZHcC6PFMNtA3duw8UMOeEn1CS_BqsAf9B0_CpPpDXvJxXt31-R6nViaO0IVUyj1BPik_H1vLokIU1FcJVhKlQadGXXRSnkCcANeDab6YTo5FPHdBosF9M4VcdnPJSAeoN7UVX1B_r1MZfz6RSEKVeRdRUFbE7lnr7L8PmVXfkkzIiLpm3WqTaR1qYYc42yqtyoWLRdYIslETrTLXStWfYsaxKvl73eA7cLxRFOAYnANmY-jFky_1GQREX9jEAUSNzNomF1ZvaMZISeH11hiktM6-ehpuB3XuMQI0WM0UL3dKW7pBQya088HOD2JT0DqMQjYmbFBDKkaX-5IBPMY0kpzNQTZgKdrpYK0qshNIj1PMYaGw9k9YsOTDFb_L73bBkk55L1WVT3pe8IXT6jhHnd1mt58johBlbkGANve5uE54CYFX_19wR65QB09vAuuj5gK_MATNkZ2RR5wDAvBllji4_zMBlFgcfQyrJ0-2KfpBfRH0YxTVmsgi6CmfaZD7w4KTt4D-mx9xlvmN-etVQn6v2iRj2hDsnFoRbV-Yv-CkMGM_3PWR2yDEjB_85K0ozzTTmjT2z6Tpoc1Ce61yUKVyMVLcpD8zmOTGwZV5lP6FLR2PgIHmEUlSeCgp0ftjUvstZTP9s7K9sJkCW4pvI7KP4NgY1Iug4yNPGB5UZiwbTIzwRPvLVfRVODZs9NsG2SzDgfYMcBy7tOhgLiBp-VuR5ih2wJSI=s970-no?authuser=0',
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
                            link: '',
                            img: 'https://lh3.googleusercontent.com/R20Zfy5d6bZpslzmrogh8_sRypL1EWMMyo0KN3h-CfzW00H1AWhGeJE2gTmMgTlwC4xXIINMrEvXjqErlqj3cjJj50iHvR788HRPo0lJ2Wo7ScIM8TRsKUEJYcjXoTP6fDo1A715YGPcSJt9omV7dcD-tEoLkQQ2f_5QMni_QHZVeWeY8LFV0l9jWgWQzNvigvRYNIPiezsE7RO852_2CXGIVI1brp7TGMcv3pmoJpnMZvVCK7eYWx1ILulYxZBLDCvh0O24c-L4glQUrEVOnZoWkmU3Jdau_SvTCJu-48dW2hGlrRElB_rBbProdHX9OsfO3Q3YWbS3TtgbImkKmWce6zLbPTIXDNVa2h2yf5xxxWBCmiFq4apLgmXaLTNzdhpGmmv7JISfjbMmLJcztQHagbAsLP9wmz1g8aHsicMevNCZpKVu3cr7Wfw0wulLjbtUiTaD4tILHohI-Q1iZ0vVJfDwG70BUtwLDIPD5_je8W-obmq-7k6Exfj1wZnOrkWgowInIFYhV3Pd23hDwaWNov1lLG32YsapqSXloATnA_AF4V51xuByG19lLSm4Iq70y0H-L2sWBHFzNC3z-mXC0eVjwMc9F4C0SzgLDeOEMaD6LcGdJf1rSJzFiRqNh8iB4UyIeBnKW7soDfRUKqwOgMQUNooj7LUiPuhhaLHzEaLCaLr3aq_X_GbyeCD9MSl4faLKVj5tgK3F2pB7ngt9k-RvNpMkkt4Vo-16Msdlx44Xi4V360SZcSpH8ZM=s970-no?authuser=0',
                            alt: 'Coming Soon'
                        },
                        {
                            title: 'Coming soon!',
                            description: 'Coming soon art made with Canva',
                            link: '',
                            img: 'https://lh3.googleusercontent.com/R20Zfy5d6bZpslzmrogh8_sRypL1EWMMyo0KN3h-CfzW00H1AWhGeJE2gTmMgTlwC4xXIINMrEvXjqErlqj3cjJj50iHvR788HRPo0lJ2Wo7ScIM8TRsKUEJYcjXoTP6fDo1A715YGPcSJt9omV7dcD-tEoLkQQ2f_5QMni_QHZVeWeY8LFV0l9jWgWQzNvigvRYNIPiezsE7RO852_2CXGIVI1brp7TGMcv3pmoJpnMZvVCK7eYWx1ILulYxZBLDCvh0O24c-L4glQUrEVOnZoWkmU3Jdau_SvTCJu-48dW2hGlrRElB_rBbProdHX9OsfO3Q3YWbS3TtgbImkKmWce6zLbPTIXDNVa2h2yf5xxxWBCmiFq4apLgmXaLTNzdhpGmmv7JISfjbMmLJcztQHagbAsLP9wmz1g8aHsicMevNCZpKVu3cr7Wfw0wulLjbtUiTaD4tILHohI-Q1iZ0vVJfDwG70BUtwLDIPD5_je8W-obmq-7k6Exfj1wZnOrkWgowInIFYhV3Pd23hDwaWNov1lLG32YsapqSXloATnA_AF4V51xuByG19lLSm4Iq70y0H-L2sWBHFzNC3z-mXC0eVjwMc9F4C0SzgLDeOEMaD6LcGdJf1rSJzFiRqNh8iB4UyIeBnKW7soDfRUKqwOgMQUNooj7LUiPuhhaLHzEaLCaLr3aq_X_GbyeCD9MSl4faLKVj5tgK3F2pB7ngt9k-RvNpMkkt4Vo-16Msdlx44Xi4V360SZcSpH8ZM=s970-no?authuser=0',
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