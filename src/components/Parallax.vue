<template>
    <div class="parallax" :style="`background-image: url(${backgroundImage});`"></div>
</template>
<script>
export default {
    props: ['backgroundImage']
}
</script>
<style scoped>
.parallax{
    min-height: 500px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
@media screen and (max-width: 1024px){
    .parallax{
        background-attachment: scroll;
    }
}
</style>