<template>
	<div class="container">
		<h2>Projects</h2>

		<projects-gallery :projects="projects" />

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