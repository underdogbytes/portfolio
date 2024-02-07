<template>
	<div>
		<intro />
		<about-me />
		<contact />
	</div>
</template>

<script>
import AboutMe from './components/About.vue'
import Contact from './components/Contact.vue'
import Intro from './components/Intro.vue'

export default {
	name: 'HomePage',
	components: {
		AboutMe,
		Contact,
		Intro
	}
}
</script>