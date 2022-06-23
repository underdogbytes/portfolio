<template>
    <div class="card--grey">
        <p class="card--grey__title">{{ title }}</p>
        <slot name="content"></slot>
    </div>
</template>
<script>
export default {
    props: ['title']
}
</script>
<style>
.card--grey{
  padding: 2rem;
  border-radius: 0.5em;
  background: #f0f0f0;
  color: #212121;
}
.card--grey__title{
    margin: 0 0 1em 0;
    font-size: clamp(1rem, 10vw, 2rem);
}

/* in case of lists */
.card--grey > ul{
  padding: 0em;
}
.card--grey ul > li{
  list-style: none;
  margin: 1em 0;
}
.card--grey ul a{
  font-weight: 600;
  color: rgb(40, 193, 55);
  text-decoration: none;
}
</style>