<template>
	<div class="project-gallery__grid">
		<div
			v-for="(project, i) in projects"
			:key="i"
			class="project-gallery__box"
		>
			<img
				:src="project.img"
				alt=""
				class="project-gallery__img"
			>

			<div class="project-gallery__description">
				<p class="project-gallery__title">{{ project.name }}</p>
				<p class="project-gallery__type">{{ project.type }}</p>
			</div>
		</div>
	</div>
</template>
<script>

export default {
	name: 'ProjectGallery',
	props: {
		projects: { type: Array, default: [] }
	}
}
</script>

<style>
.project-gallery__grid {
	display: grid;
	gap: 1rem;
	grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
}

.project-gallery__box {
	border: 3px solid transparent;
}

.project-gallery__img {
	width: 100%;
	aspect-ratio: 1/1;
	object-fit: cover;
}

.project-gallery__description {
	padding: 0.5rem;
	font-size: 14px;
}

p.project-gallery__title {
	color: var(--body-color);
	font-size: medium;
	font-weight: 800;
	line-height: 1.1;
}

.project-gallery__type {
	font-weight: 400;
	color: var(--body-color);
}
</style>