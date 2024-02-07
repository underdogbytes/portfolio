<template>
	<div>
		<intro />
		<about-me />
		<projects />
		<contact />
	</div>
</template>

<script>
import AboutMe from './components/About.vue'
import Contact from './components/Contact.vue'
import Intro from './components/Intro.vue'
import Projects from './components/projects/Index.vue'

export default {
	name: 'HomePage',
	components: {
		AboutMe,
		Contact,
		Intro,
		Projects
	}
}
</script>