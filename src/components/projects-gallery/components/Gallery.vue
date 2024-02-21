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

			<div class="project-gallery__text-box">
				<p class="project-gallery__type">
					{{ project.keys[0] }}, {{ project.date }}
				</p>

				<p class="project-gallery__role">
					worked as
					<span
						v-for="(role, i) in project.workedAs"
						:key="i"
					>
						<span v-if="i+1 == project.workedAs.length && project.workedAs.length != 1">and </span>
						{{ role }}
						<span v-if="i+2 < project.workedAs.length">, </span>
					</span>
				</p>
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
:root {
	--projects-gallery-font-clr: #4a4a48;
	--projects-gallery-box-clr: #fff;
}

[data-theme='light'] {
	--projects-gallery-font-clr: #4a4a48;
	-projects-gallery-box-clr: #fff;
}

[data-theme='dark'] {
	--projects-gallery-font-clr: #4a4a48;
	-projects-gallery-box-clr: #fff;
}

.project-gallery__grid {
	display: grid;
	gap: 2rem;
	grid-template-columns: repeat(auto-fit, minmax(15rem, 2fr));
}

.project-gallery__box {
	padding: 20px;

	border: 3px solid transparent;
	border-radius: 8px;
	background-color: var(--projects-gallery-box-clr);

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

.project-gallery__text-box {
	padding-top: 0.5rem;
}

p.project-gallery__type {
	margin: 0;

	font-family: var(--font-beanie);
	font-size: 32px;
}

.project-gallery__type {
	font-weight: 400;
	color: var(--projects-gallery-font-clr);
}

.project-gallery__role {
	font-size: 14px;
	color: var(--projects-gallery-font-clr);
}
</style>