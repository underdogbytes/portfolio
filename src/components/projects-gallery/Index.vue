<template>
	<div class="project-gallery__grid">
		<div
			v-for="(project, i) in projects"
			:key="i"
			class="project-gallery__box"
		>
			<img
				:src="project.source"
				alt=""
				class="project-gallery__img"
			>

			<div class="project-gallery__description">
				<p class="project-gallery__title">{{ project.name }}</p>
				<p class="project-gallery__type">{{ project.type }}</p>

				<p>
					Worked as:
					<span
						v-for="(work,i) in project.workedAs"
						:key="i"
					>
						{{ work }}<span v-if="i < project.workedAs.length - 1">, </span>
					</span>

					<br>
					Tools:
					<span
						v-for="(skill, i) in project.skills"
						:key="i"
					>
						{{ skill }}<span v-if="i < project.skills.length - 1">, </span>
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
	align-self: end;
	padding: 0.5rem;

	color: #212121d9;
	font-size: 14px;
}

.project-gallery__description > p {
	margin-bottom: 0.5rem;
}

p.project-gallery__title {
	margin-bottom: 0.1rem;

	color: #2f2f2f;
	font-size: medium;
	font-weight: 800;
	line-height: 1.1;
}

.project-gallery__type {
	font-weight: 700;
	color: #585858;
}
</style>