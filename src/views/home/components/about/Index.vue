<template>
	<div class="about__bg">
		<div class="container">
			<div class="about__grid card--glass">
				<div>
					<div class="about__title">
						<h2>About me</h2>
					</div>

					<p>So, hellow there! ^-^</p>
					<p>
						My name is Beatriz, a coder since my teenage years and professionally since the age of 22.
						By the way, I'm 27 right now, haha.
						It's been a long time, huh? How time flies. ^-^
					</p>
					<p>Anyways, I also enjoy drawing and burning the midnight oil by creating and solving things.</p>
					<p>And click here to see my CV:</p>

					<a
						href="https://drive.google.com/file/d/1qJJZtE36uLkJki_58gBWvOUwrBKOVUdn/view?usp=sharing"
						target="_blank"
					>
						<button>
							Curriculum Vitae
						</button>
					</a>

					<p>
						I hope you're having a great day, and if not, come here for a hug!
						<br>
						♡ Things will get better! ♡
					</p>
					<img
						src="@/assets/images/illustrations/underdogbytes-with-name.svg"
						alt="Underdog Bytes logo"
						class="about__dog-logo"
					>
					<p>♡ xoxo ♡</p>
				</div>

				<div>
					<CardGlass />
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import CardGlass from './CardGlass.vue';

export default {
	name: 'HomeAbout',
	components: { CardGlass }
}
</script>
<style scoped>
.about__grid {
	padding: calc(16px + 1rem);
	display: grid;
	gap: 2rem;
	grid-template-columns: repeat(auto-fit, minmax(15rem, 2fr));
}
.about__bg {
	margin: auto;

	background-image: url('@/assets/images/illustrations/cat-signature.png');
	background-position: center;
	background-repeat: repeat;
	background-size: 250px;
}

.about__title {
	margin-bottom: 1rem;
}
.about__dog-logo {
	margin-top: calc(16px + 3rem);
	width: 200px;
}
button {
	margin-bottom: 1rem;
}

@media screen and (min-width: 1200px) {
	.about__title {
		display: flex;
	}
}
</style>