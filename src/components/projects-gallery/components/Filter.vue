<template>
	<div class="project-gallery__filter">
		<button
			v-for="(option, i) in options"
			:key="i"
			@click="emitFilter(option.value)"
		>
			{{ option.label }}
		</button>
	</div>
</template>
<script>
import { ProjectGalleryFilters as Filters } from '@/common/enum/projectGalleryFilters';

export default {
	name: 'ProjectGalleryFilter',
	data() {
		return {
			options: [
				{ label: 'All', value: Filters.ALL },
				{ label: 'Designer', value: Filters.DESIGNER },
				{ label: 'Developer', value: Filters.DEVELOPER },
			]
		}
	},
	methods: {
		emitFilter(option) {
			this.$emit('filter', option)
		}
	}
}
</script>
<style scoped>
.project-gallery__filter {
	display: flex;
	margin-bottom: 2vh;
}
</style>