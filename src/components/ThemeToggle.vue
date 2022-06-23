<template>
    <div class="toggle" @click="changeTheme()">
        <img class="day active" src="@/assets/icons/day.svg" alt="">
        <img class="night" src="@/assets/icons/night.svg" alt="">
    </div>
</template>

<script>
export default {
    methods: {
        changeIcons(){   
            let day = document.getElementsByClassName('day')[0];
            let night = document.getElementsByClassName('night')[0];
            day.classList.contains('active') ? (day.classList.remove('active'), night.classList.add('active')) : (night.classList.remove('active'), day.classList.add('active'))
        },
        changeTheme(){
            let storedTheme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
            if(storedTheme) document.documentElement.setAttribute('data-theme', storedTheme)
            let currentTheme = document.documentElement.getAttribute("data-theme")

            currentTheme === 'light' ? this.changeCurrentThemeTo('dark') : this.changeCurrentThemeTo('light')
        },
        changeCurrentThemeTo(theme){
            this.changeIcons()
            this.setAtributesTheme(theme)
        },
        setAtributesTheme(theme){
            document.documentElement.setAttribute("data-theme", theme)
            localStorage.setItem('theme', theme)
        }
    }
}
</script>

<style>
.toggle {
    position: fixed;
    left: 0;
    bottom: 0;
    z-index: 200;
}
.toggle :where(img) {
    display: none;
    margin: 2em;
    width: 3em;
    height: 3em;
}
.toggle:hover :where(img){
    animation: shakeIcon 1.5s, lsdIcon 1s;
    animation-iteration-count: infinite;
}
.toggle :where(img.active) { display: block; }

@keyframes lsdIcon {
  from {
    filter:
        drop-shadow(0 0 0.9rem #FF8080)
        drop-shadow(0 0 0.9rem #FFE488)
        drop-shadow(0 0 0.9rem #8CFF85);
  }
  to {
    filter:
        drop-shadow(0 0 0.9rem #8CFF85)
        drop-shadow(0 0 0.9rem #80C7FF)
        drop-shadow(0 0 0.9rem #E488FF)
  }
}

@keyframes shakeIcon {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>