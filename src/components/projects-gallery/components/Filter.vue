<template>
	<div class="project-gallery__filter">
		<button
			v-for="(option, i) in options"
			:key="i"
			@click="emitFilter(option.value)"
			class="project__btn"
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
<style>
:root {
	--btn-projects-filter-bg: #fff;
	--btn-projects-filter-text: #212121;
	--btn-projects-filter-bg-hover: #414141;
	--btn-projects-filter-text-hover: #fff;
}

[data-theme='light'] {
	--btn-projects-filter-bg: #fff;
	--btn-projects-filter-text: #212121;
	--btn-projects-filter-bg-hover: #414141;
	--btn-projects-filter-text-hover: #fff;
}

[data-theme='dark'] {
	--btn-projects-filter-bg: #2b2b28;
	--btn-projects-filter-text: #fff;
	--btn-projects-filter-bg-hover: #4b4b4b;
	--btn-projects-filter-text-hover: #fff;
}

.project-gallery__filter {
	display: flex;
	margin-bottom: 2vh;
}
.project__btn {
	background-color: var(--btn-projects-filter-bg);
	color: var(--btn-projects-filter-text);
}
.project__btn:hover {
	background-color: var(--btn-projects-filter-bg-hover);
	color: var(--btn-projects-filter-text-hover);
}
</style>