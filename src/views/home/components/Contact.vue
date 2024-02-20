<template>
	<div class="contact__bg">
		<div class="container">
			<h2>Contact me</h2>
			<p>
				Available for freelancing jobs,
				send me a message at:
			</p>

			<dl>
				<dt>
					<a
						href="https://www.linkedin.com/in/btrz/"
						target="_blank"
					>
						Linkedin
					</a>
				</dt>
				<dt>
					<a
						href="https://www.instagram.com/underdogbytes"
						target="_blank"
					>
						Instagram
					</a>
				</dt>
			</dl>
		</div>
	</div>
</template>
<script>
export default {
	name: 'HomeContact'
}
</script>
<style>
:root {
	--contact-bg-clr: #fff;
	--contact-text-clr: #4a4a48;
}

[data-theme='light'] {
	--contact-bg-clr: #fff;
	--contact-text-clr: #4a4a48;
}
[data-theme='dark'] {
	--contact-bg-clr: #4a4a48;
	--contact-text-clr: #fff;
}
.contact__bg {
	background-color: var(--contact-bg-clr);
	color: var(--contact-text-clr);
}
li {
	list-style: none;
	font-family: var(--font-montserrat);
	font-weight: 400;
	font-size: 36px;
}
</style>