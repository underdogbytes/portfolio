<script setup>
import { RouterLink, RouterView } from 'vue-router'
import SideFixedBar from '@/components/sideFixedBar/Index.vue';
import MyFooter from '@/components/footer/Index.vue';

</script>

<template>
	<main>
		<RouterView />
	</main>
	<side-fixed-bar />
	<my-footer />
</template>