<template>
	<div class="container d-flex-between-md">
		<div class="mw-600">
			<h2>About me</h2>

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
			<p>♡ xoxo ♡</p>
		</div>
		<div class="d-flex">
			<img
				src="@/assets/images/illustrations/underdogbytes-with-name.svg"
				alt=""
				class="m-auto"
			>
		</div>
	</div>
</template>
<script>
export default {
	name: 'AboutMe',
}
</script>
<style scoped>
img {
	width: 400px;
}
button {
	margin-bottom: 1rem;
}
</style>