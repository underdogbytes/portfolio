<template>
	<div class="project">
		<div class="project__text-section">
			<div class="m-auto">
				<h1>
					My <span>portfolio</span>
					<br>
					is a <span>masterpiece</span>
					<br>
					in progress
				</h1>
				<p class="mt-1">
					Beatriz Lima,
					<br>
					a Contemporary Digital
					<br>
					Renaissance
				</p>
			</div>
		</div>
		<div>
			<slideshow />
		</div>
	</div>
</template>
<script>
import Slideshow from '@/components/slideshow/Index.vue';

export default {
	name: 'HeroProjects',
	components: {
		Slideshow
	}
}
</script>
<style scoped>
.project {
	padding-top: 4rem;
	padding-bottom: 4rem;
}
.project__text-section {
	padding: 2rem;
	display: grid;
	align-items: center;
}
.project__text-section h1 > span {
	font-weight: 500;
	font-style: italic;
}

.project__text-section p {
	font-size: 14px;
}
.project__text__icon {
	width: 64px;
}

@media screen and (min-width: 1000px) {
	.project {
		height: 90vh;
		display: flex;
	}
	.project > div {
		width: 50%;
	}

	.project__text-section {
		padding: 2rem;
	}
}
</style>