<template>
	<div class="slideshow__container">
		<div class="slideshow__container-imgs">

			<div
				class="mySlides fade"
				v-for="(slide, i) in slides"
				:key="i"
			>
				<img
					:src="slide.image"
					class="slideshow__img"
				>
			</div>

		</div>

		<div class="slideshow__dots">
			<span
				class="dot"
				v-for="(slide, i) in slides"
				:key="i"
			/>
		</div>
	</div>
</template>
<script>
import PanteraMotors from '@/assets/images/projects/pantera-motors/slideshow.png';
import EscolaRenovacao from '@/assets/images/projects/escola-renovacao/slideshow.png';
import ShowGospel from '@/assets/images/projects/show-gospel/slideshow.png';

export default {
	name: 'Slideshow',
	data() {
		return {
			slideIndex: 0,
			slides: [
				{ image: PanteraMotors },
				{ image: EscolaRenovacao },
				{ image: ShowGospel },
			]
		}
	},
	mounted() {
		this.showSlides();
	},
	methods: {
		showSlides() {
			let i;
			let slides = document.getElementsByClassName("mySlides");
			let dots = document.getElementsByClassName("dot");
			for (i = 0;i < slides.length;i++) {
				slides[i].style.display = "none";
			}
			this.slideIndex++;
			if (this.slideIndex > slides.length) { this.slideIndex = 1 }
			for (i = 0;i < dots.length;i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[this.slideIndex - 1].style.display = "block";
			dots[this.slideIndex - 1].className += " active";
			setTimeout(this.showSlides, 2000);
		}
	}

}
</script>

<style>
.mySlides {
	height: 100%;
	display: none;
}

.slideshow__container {
	width: 100%;
	height: 100%;
	display: flex;
	margin: auto;
	padding: 1rem;
}

.slideshow__container-imgs {
	height: 100%;
}
.slideshow__img {
	height: 100%;
}

.slideshow__dots {
	margin: auto;
	display: grid;
	gap: 0.3rem;
}

.dot {
	height: 14px;
	width: 14px;
	margin: 0 2px;
	background-color: #bbb;
	border-radius: 50%;
	display: inline-block;
	transition: background-color 0.6s ease;
}

.active {
	background-color: #717171;
}

.fade {
	animation-name: fade;
	animation-duration: 1.5s;
}

@keyframes fade {
	from {
		opacity: 0.4;
	}
	to {
		opacity: 1;
	}
}
</style>