<template>
	<div>
		<intro />
		<about />
		<projects />
		<contact />
	</div>
</template>

<script>
import About from './components/About.vue'
import Contact from './components/Contact.vue'
import Intro from './components/Intro.vue'
import Projects from './components/Projects.vue'

export default {
	name: 'HomePage',
	components: {
		About,
		Contact,
		Intro,
		Projects
	}
}
</script>