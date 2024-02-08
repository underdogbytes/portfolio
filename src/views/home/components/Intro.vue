<template>
	<div class="intro">
		<div class="intro__content glass">
			<img
				class="intro__content__img"
				src="@/assets/images/me/01.jpg"
				alt=""
			>

			<div class="intro__content__text">
				<h1>
					<span>/ᐠ - ˕ -マ</span>
					<span>Beatriz Lima</span>
					<span>≽^•⩊•^≼</span>
				</h1>
				<p>
					<span>Software Engineer </span>
					<span>& UI/UX designer</span>
				</p>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: 'HomeIntro'
}
</script>
<style>
:root {
	--intro-text: #212121;
}

[data-theme='dark'] {
	--intro-text: #e5e5e5;
}

.intro {
	padding: 5rem;

	background-image: url('../../../assets/images/illustrations/cat-signature.png');
	background-position: center;
	background-repeat: repeat;
	background-size: 400px;
}

.intro__content.glass {
	background: rgba(108, 108, 108, 0.045); /* Cor do painel de vidro com opacidade */
	backdrop-filter: blur(5px); /* Desfoque do plano de fundo */
	border-radius: 8px;
	padding: 20px;
	text-align: center;
}

.intro__content {
	max-width: var(--max-width-container);
	width: fit-content;
	margin: auto;
	position: relative;

	animation: onda 2s ease-in-out infinite;
}

.intro__content__text {
	margin-top: 1rem;
	text-align: center;
	color: var(--intro-text);
}

.intro__content__img {
	display: block;
	margin: auto;
	max-width: 400px;
	max-height: 400px;
	background: var(--cat-bg);
	border-radius: 8px;
}

@media screen and (max-width: 1000px) {
	.intro {
		padding: 2rem;
	}

	.intro__content__text h1,
	.intro__content__text p {
		display: grid;
	}

	.intro__content__img {
		width: 250px;
	}
}
</style>