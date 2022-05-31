<template>
    <div class="portfolioCards__container">
        <div class="portfolioCards" v-for="card in carouselCards" :key="card">
            <div class="portfolioCards__front">
                <img class="portfolioCards__thumbnail" :src="card.front.imgSrc" :alt="card.front.imgAlt" />
                <h3 class="portfolioCards__front__name">{{ card.front.name }}</h3>
                <div class="portfolioCards__front__info">
                    <p>{{ card.front.description }}</p>
                </div>
            </div>
            <div class="portfolioCards__back">
                <div class="portfolioCards__back__info">
                    <a class="portfolioCards__back__info__link" :href="card.back.developerLink" target="_blank">
                        <p class="portfolioCards__back__info__text">Developer<span>{{ card.back.developerName }}</span></p>
                    </a>
                    <a class="portfolioCards__back__info__link" :href="card.back.designerLink" target="_blank">
                        <p class="portfolioCards__back__info__text">Designer<span>{{ card.back.designerName }}</span></p>
                    </a>
                </div>
                <div class="portfolioCards__back__btns">
                    <a v-if="card.back.linkDeploy" class="portfolioCards__btn" :href="card.back.linkDeploy" target="_blank">See the project at production</a>
                    <a v-if="card.back.link" class="portfolioCards__btn" :href="card.back.link">See more about the project</a>
                </div>
            </div>
            <div class="portfolioCards__background"></div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            carouselCards: [
                {
                    front: {
                        name: 'Tempestade Criativa',
                        description: 'Website designed by Ito and developed by me, using HTML/CSS & JS',
                        imgSrc: 'src/assets/projects/tempestade-criativa.png',
                        imgAlt: 'Website Tempestade Criativa'
                    },
                    back: {
                        link: '',
                        linkDeploy: 'https://tempestadecriativa.com.br',
                        developerName: 'Beatriz Lima (it\'s me! :D)',
                        developerLink: 'https://www.linkedin.com/in/btrz/',
                        designerName: 'João Ito',
                        designerLink: 'https://www.linkedin.com/in/joaoito/'
                    }
                },
                {
                    front: {
                        name: 'Coleções Fauna do Brasil',
                        description: 'E-commerce designed by Bruno Mezzomo and developed by me using OpenCart (also created the template for it)',
                        imgSrc: 'src/assets/projects/colecoes-fauna-do-brasil.png',
                        imgAlt: 'E-commerce for Coleções Fauna do Brasil'
                    },
                    back: {
                        link: '',
                        linkDeploy: 'https://faunadobrasil.com.br',
                        developerName: 'Beatriz Lima (it\'s me! :D)',
                        developerLink: 'https://www.linkedin.com/in/btrz/',
                        designerName: 'Bruno Mezzomo',
                        designerLink: 'https://www.linkedin.com/in/bruno-henrique-mezzomo-858227160/'
                    }
                },
                {
                    front: {
                        name: 'Show Gospel',
                        description: 'Website designed by Publysh and developed by me, using Laravel and PHP',
                        imgSrc: 'src/assets/projects/show-gospel.png',
                        imgAlt: 'Website and blog for Show Gospel magazine'
                    },
                    back: {
                        link: '',
                        linkDeploy: '',
                        developerName: 'Beatriz Lima (it\'s me! :D)',
                        developerLink: 'https://www.linkedin.com/in/btrz/',
                        designerName: 'Püblysh Agency',
                        designerLink: ''
                    }
                },
            ]
        }
    }
}
</script>

<style>
:root{
    --br: .5em;
    --transitionCubic: transform 250ms cubic-bezier(.21, 1.00, .81, 1.00),
}
.portfolioCards__container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(15em, 1fr));
}
/* card itself */
.portfolioCards{
    position: relative;
    z-index: 3;
    width: 15em;
    margin: 2em;
}
.portfolioCards:hover .portfolioCards__front__name{
    color: #fff;
    animation: carouselCardName 250ms forwards;
}
.portfolioCards:hover .portfolioCards__back{ opacity: 1; }
.portfolioCards:hover .portfolioCards__background{
    opacity: 1;
    transform: scale(1.2);
    transition:
        var(--transitionCubic),
        opacity 100ms linear;
}
.portfolioCards:hover .portfolioCards__front{ transform: translateY(-30%) scale(.8); }
.portfolioCards:hover .portfolioCards__front__info{ display: none; }

/* front card */
.portfolioCards__front{ transition: 250ms; }
.portfolioCards__thumbnail{ border-radius: var(--br); }
.portfolioCards__front__name{ margin: .78em 0; }
.portfolioCards__front__info{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* back card */
.portfolioCards__back{
    opacity: 0;
    position: absolute;
    bottom: 10%;
    left: 0;
    right: 0;
    color: rgb(228, 228, 228);
}
.portfolioCards__back__info{
    margin: 2em 0;
    columns: 2;
    column-rule: 1px solid rgba(255, 255, 255, .25);
}
.portfolioCards__back__info__link,
.portfolioCards__back__info__link:focus{
    text-decoration: none;
    color: inherit;
}
.portfolioCards__back__info__text{ text-align: center;}
.portfolioCards__back__info__text > *{
    display: block;
    font-size: .7rem;
}

/* background */
.portfolioCards__background{
    position: absolute;
    z-index: -1;
    inset: 0;
    opacity: 0;
    border-radius: var(--br);
    background: rgb(37, 37, 37);
    transform: scale(.2, .5);
}

.portfolioCards__back__btns{ text-align: center; }
.portfolioCards__btn{
    padding: .8em;
    margin: 2em 0;
    width: 100%;
    cursor: pointer;
    border: none;
    border-radius: var(--br);

    color: rgb(255, 57, 186);
    font-size: .8rem;

    text-decoration: none;
    text-shadow:
        0 0 0.125em hsl(0 0% 100% / 0.3),
        0 0 0.45em rgb(255, 57, 186);
    box-shadow:
        inset 0 0 0.5em 0 rgb(255, 57, 186),
        0 0 0.5em 0 rgb(255, 57, 186);
}
.portfolioCards__btn:hover,
.portfolioCards__btn:focus{
    background: rgb(255, 57, 186);
    color: rgb(255, 255, 255);
    text-shadow: none;
}

@keyframes carouselCardName {
    0%{
        text-align: left;
        opacity: 1;
    }
    20%{
        text-align: left;
        opacity: 0;
    }
    50%{
        text-align: center;
        opacity: 0;
        transform: scale(1.2);
    }
    100%{
        text-align: center;
        opacity: 1;
    }
}
</style>