<template>
	<div>
		<hero-projects />
		<about />
		<contact />
	</div>
</template>

<script>
import HeroProjects from '@/components/hero-projects/Index.vue'
import About from './components/about/Index.vue'
import Contact from './components/Contact.vue'

export default {
	name: 'HomePage',
	components: {
		HeroProjects,
		About,
		Contact,
	}
}
</script>