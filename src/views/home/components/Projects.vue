<template>
	<div class="container">
		<h2>Projects</h2>

		<projects-gallery :projects="projects" />

	</div>
</template>
<script>
import ProjectsGallery from '@/components/projects-gallery/Index.vue'
import Projects from '@/api/projects'

export default {
	name: 'PortfolioHome',
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