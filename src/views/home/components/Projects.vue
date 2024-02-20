<template>
	<div class="project__bg">
		<div class="container">
			<h2 class="project__title">Projects</h2>

			<projects-gallery :projects="projects" />

		</div>
	</div>
</template>
<script>
import ProjectsGallery from '@/components/projects-gallery/Index.vue'
import Projects from '@/common/api/projects'

export default {
	name: 'HomePortfolio',
	components: {
		ProjectsGallery
	},
	data() {
		return {
			projects: []
		}
	},
	mounted() {
		this.getProjects();
	},
	methods: {
		getProjects() {
			const projects = Projects.getAll();
			this.projects = projects;
		}
	}
}
</script>
<style>
:root {
	--projects-bg-clr: #ffa1c5;
	--projects-title-clr: #fff;
}

[data-theme='light'] {
	--projects-bg-clr: #ffa1c5;
	--projects-title-clr: #fff;
}

[data-theme='dark'] {
	--projects-bg-clr: #ffa1c5;
	--projects-title-clr: #4a4a48;
}
.project__bg {
	background-color: var(--projects-bg-clr);
}
h2.project__title {
	color: var(--projects-title-clr);
}
</style>