<template>
    <div class="blog__container">
        <div class="blog__card" v-for="post in posts" :key="post" data-aos="zoom-out">
            <img loading="lazy" class="blog__card__img" :src="post.img" alt="">
            <div class="blog__card__text">
                <p class="blog__card__title">{{post.title}}</p>
                <p class="blog__card__description">{{post.description}}</p>
                <a href="post.link" target="_blank" class="blog__card__link"><p>Read More</p></a>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                posts: [
                    {
                        img: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhcyHOD_C0VZ-auPpk0z5QwiLrnWBaOXkZ8rmYavmbdldPl0SHgBzZ1QLDPiLRU27nDlwrfc_MePgs8lehWD5jtBMUcKtiKDWnbJVUu6ztDZXxapQDtlo4iLHJO29D8AIb2YUPKdd-ru-rfFxkej08AtaGErNC8KbKM0o0OEK17zL46MsBxeOJfWiLt7Q/s16000/as%207%20pontes%20de%20Königsberg.png',
                        title: 'Em um reino tão tão distante, haviam 7 pontes...',
                        description: 'Em um reino tão tão distante (e tão tão antigo), em uma antiga cidade Prússia fundada em 1255, haviam sete pontes as quais foram construídas para interligar uma pequena ilha no rio Pregel ao restante da cidade.',
                        link: 'https://bsideofcode.blogspot.com/2022/05/em-um-reino-tao-tao-distante-haviam.html'
                    },
                    {
                        img: 'https://lh3.googleusercontent.com/-UvrzaeUnT-g/YdmdYD9h-cI/AAAAAAAAdO8/LiaKdU3DiIwYtRC0ucizYTI-ygrNykWfQCNcBGAsYHQ/w640-h256/Amarelo%2Be%2BPreto%2BPapel%2BMaximalista%2BBanner%2Bpara%2BTwitch.png',
                        title: 'BOOK REVIEW: So good they can\'t ignore you',
                        description: 'Quando Steve Jobs fez seu discurso em Stanford, em 2005, um dos conselhos foi: You\'ve got to find what you love... The only way to do great work is to love what you do. If you haven\'t found it yet, keep looking, and don\'t settle. Mas será que foi só paixão que fundou a Apple?',
                        link: 'https://bsideofcode.blogspot.com/2022/01/so-good-they-cant-ignore-you.html'
                    },
                    {
                        img: 'https://1.bp.blogspot.com/-JFUP2eZqb9A/YUuSI0ybNnI/AAAAAAAAaoY/Ca0WM1mI6pgB-8LJWEp-GuQvJ0Bc19N7QCLcBGAsYHQ/w640-h213/carl%2Bsagan.png',
                        title: 'Cosmologia e a expansão do universo',
                        description: 'A palavra universo vem do grego antigo cosmos. E se na Grécia antiga, o estudo do cosmos tinha base nas narrativas mitológicas, hoje em dia o estudo do universo, ou cosmologia, se dá através de cálculos e fórmulas, com instrumentos tecnológicos como computadores e telescópios.',
                        link: 'https://bsideofcode.blogspot.com/2021/09/cosmologia-e-expansao-do-universo.html',
                    }
                ]
            }
        }
    }
</script>
<style scoped>
.blog__container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    grid-gap: 1rem;
    margin: 1rem;
}
.blog__card{
    margin: auto;
    max-width: 300px;
    height: 500px;
    box-shadow: 5px 5px 8px #95959582;
}
.blog__card__img{
    height: 200px;
    width: 100%;
    object-fit: cover;
    background-color: #a1a1a1;
}
.blog__card__text{
    padding: 2rem 1rem 1rem 1rem;
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