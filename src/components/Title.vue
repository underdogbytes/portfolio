<script setup>
defineProps({
  title: {
    type: String,
    required: true
  },
  tag: {
      type: String,
      required: true
  }
})
</script>

<template>
    <div class="title__container">
        <p class="title__tag">{{tag}}</p>
        <p class="title">{{title}}</p>
    </div>
</template>

<style scoped>
.title__container{
    margin: 10em 0 5em 0;
    text-align: center;
}
.title__tag{
    text-transform: uppercase;
    font-size: 1.5rem;
    font-weight: 100;
}
.title{
    font-size: 2.2rem;
    font-weight: 700;
}
</style>
