<template>
	<div class="card__content glass">
		<img
			class="card__content__img"
			src="@/assets/images/me/01.jpg"
			alt="My photo smiling :)"
		>

		<div class="card__content__text">
			<p class="card__content__text--title">
				<span>/ᐠ - ˕ -マ</span>
				<span>Beatriz Lima</span>
				<span>≽^•⩊•^≼</span>
			</p>
			<p>
				<span>Software Engineer </span>
				<span>& UI/UX designer</span>
			</p>
		</div>
	</div>
</template>
<style>
:root {
	--card-text: #212121;
}

[data-theme='dark'] {
	--card-text: #e5e5e5;
}

.card__content.glass {
	background: rgba(41, 41, 41, 0.045); /* Cor do painel de vidro com opacidade */
	backdrop-filter: blur(5px); /* Desfoque do plano de fundo */
	border-radius: 8px;
	padding: 20px;
	text-align: center;
}

.card__content {
	max-width: var(--max-width-container);
	width: fit-content;
	margin: auto;
	position: relative;

	animation: onda 2s ease-in-out infinite;
}

.card__content__text {
	margin-top: 1rem;
	text-align: center;
	color: var(--card-text);
}

.card__content__text--title {
	font-size: calc(16px + 0.5rem);
}

.card__content__img {
	display: block;
	margin: auto;
	width: calc(16px + 20rem);
	background: var(--cat-bg);
	border-radius: 8px;
}

@media screen and (max-width: 1000px) {
	.card {
		padding: 2rem;
	}

	.card__content__text h1,
	.card__content__text p {
		display: grid;
	}
}
</style>