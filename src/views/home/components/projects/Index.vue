<template>
	<div class="container">
		<h2>Projects</h2>

		<p>Hover the photos to see more info:</p>

		<photo-gallery :photos="photos" />

	</div>
</template>
<script>
import PhotoGallery from '@/components/photo-gallery/Index.vue'
import Projects from '@/api/projects'

export default {
	name: 'PortfolioHome',
	components: {
		PhotoGallery
	},
	data() {
		return {
			photos: []
		}
	},
	mounted() {
		this.getProjects();
	},
	methods: {
		getProjects() {
			const projects = Projects.getAll();
			this.photos = projects;
		}
	}
}
</script>