<template>
	<div>
		<project-filter @filter="getFilter" />
		<gallery :projects="filteredProjects" />
	</div>
</template>
<script>
import Gallery from './components/Gallery.vue';
import ProjectFilter from './components/Filter.vue';
import { ProjectGalleryFilters as Filters } from '@/common/enum/projectGalleryFilters';

export default {
	name: 'ProjectGallery',
	props: {
		projects: { type: Array, default: [] }
	},
	components: {
		Gallery,
		ProjectFilter
	},
	data() {
		return {
			filteredProjects: []
		}
	},
	watch: {
		projects: {
			handler(newProjects) {
				this.filteredProjects = newProjects
			},
			deep: true
		}
	},
	methods: {
		getFilter(filterBy) {
			switch (filterBy) {
				case Filters.ALL:
					this.filteredProjects = this.projects
					break;

				default:
					let filtering = this.projects.filter((item) => item.workedAs.includes(filterBy));
					this.filteredProjects = filtering;
					break;
			}
		}
	}
}
</script>
<style scoped>
a {
	text-align: center;
}
</style>