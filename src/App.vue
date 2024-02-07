<script setup>
import { RouterLink, RouterView } from 'vue-router'
import SideFixedBar from '@/components/sideFixedBar/Index.vue';
import MyFooter from '@/components/footer/Index.vue';

</script>

<template>
	<side-fixed-bar />
	<RouterView />
	<my-footer />
</template>