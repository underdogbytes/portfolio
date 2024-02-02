<script setup>
import { RouterLink, RouterView } from 'vue-router'
import ThemeToggle from '@/components/ThemeToggle.vue';
</script>

<template>
	<ThemeToggle />
	<RouterView />
</template>