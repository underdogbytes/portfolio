<template>
	<footer>
		<div class="footer__copy">
			<p>/ᐠ - ˕ -マ Beatriz Lima ≽^•⩊•^≼ - 2024</p>
		</div>
	</footer>
</template>
<script>
export default {
	name: 'MyFooter'
}
</script>
<style>
/* Fallback */
:root {
	--footer-bg: #fdfdfd;
	--footer-text: #212121;
}

[data-theme='light'] {
	--footer-bg: #fdfdfd;
	--footer-text: #212121;
}

[data-theme='dark'] {
	--footer-bg: #212121;
	--footer-text: #fefefe;
}

footer {
	padding: 20px 0 0 0;
	display: block;
	background-color: var(--footer-bg);
}
.footer__copy {
	margin: 1rem auto auto auto;
	padding: 1rem 0;
	color: var(--footer-text);
}
.footer__copy p {
	font-weight: 400;
	text-align: center;
}
</style>