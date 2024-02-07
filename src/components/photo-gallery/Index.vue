<template>
	<div class="project-gallery__grid">
		<div
			v-for="(photo, i) in photos"
			:key="i"
			class="project-gallery__box stacked"
		>
			<img
				:src="photo.source"
				alt=""
				class="project-gallery__img"
			>
			<div class="project-gallery__description">
				<h2 class="project-gallery__title">Worked as:</h2>
				<p>
					<span
						v-for="(tag, i) in photo.tags"
						:key="i"
					>
						{{ tag }}<span v-if="i < photo.tags.length - 1">, </span>
					</span>
				</p>

				<h2 class="project-gallery__title">
					Tools:
				</h2>
				<p>
					<span
						v-for="(tech, i) in photo.techs"
						:key="i"
					>
						{{ tech }}<span v-if="i < photo.techs.length - 1">, </span>
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
		photos: { type: Array, default: [] }
	}
}
</script>

<style>
.project-gallery__grid {
	display: grid;
	gap: 0.125rem;
	grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
}

.project-gallery__box {
	aspect-ratio: 1 / 1;
	border: 3px solid transparent;
}

.project-gallery__img {
	width: 100%;
	aspect-ratio: 1/1;
	object-fit: cover;
}

.project-gallery__title {
	font-size: 1.8rem;
}

.project-gallery__description {
	display: none;
	align-self: end;
	padding: 0.5rem;

	background: #212121d9;
	color: #fff;
	font-size: 16px;
}

.project-gallery__box:hover .project-gallery__description {
	display: block;
	height: 100%;
}
</style>