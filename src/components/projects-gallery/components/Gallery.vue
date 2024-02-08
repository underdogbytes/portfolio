<template>
	<div class="project-gallery__grid">
		<div
			v-for="(project, i) in projects"
			:key="i"
			class="project-gallery__box"
		>
			<div class="project-gallery__img-container">
				<img
					:src="project.img"
					alt=""
					class="project-gallery__img"
				>
			</div>

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
	gap: 2rem;
	grid-template-columns: repeat(auto-fit, minmax(15rem, 2fr));
}

.project-gallery__box {
	border: 3px solid transparent;
	cursor: pointer;
}

.project-gallery__img-container {
	overflow: hidden;
	aspect-ratio: 1/1;
}
.project-gallery__img {
	width: 100%;
	aspect-ratio: 1/1;
	object-fit: cover;

	transition: transform 0.4s ease;
	transform-origin: 50% 50%;
}

.project-gallery__box:hover .project-gallery__img {
	transform: scale(1.2);
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