<template>
	<div>
		<hero-projects />
		<about />
		<projects />
		<contact />
	</div>
</template>

<script>
import HeroProjects from '@/components/hero-projects/Index.vue'
import About from './components/about/Index.vue'
import Contact from './components/Contact.vue'
import Projects from './components/Projects.vue'

export default {
	name: 'HomePage',
	components: {
		HeroProjects,
		About,
		Contact,
		Projects
	}
}
</script>