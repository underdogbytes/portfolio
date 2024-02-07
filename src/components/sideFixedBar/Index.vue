<template>
	<ul class="floatingBox">
		<li>
			<img
				src="@/assets/icons/github.svg"
				alt=""
			>
		</li>
		<li>
			<img
				src="@/assets/icons/behance.svg"
				alt=""
			>
		</li>
		<li>
			<img
				src="@/assets/icons/linkedin.svg"
				alt="Behance icon"
			>
		</li>
		<li>
			<theme-toggle-vue />
		</li>
	</ul>
</template>
<script>
import themeService from '@/services/theme';
import ThemeToggleVue from '@/components/ThemeToggle.vue'

export default {
	name: 'sideFixedBar',
	components: {
		ThemeToggleVue,
	},
	data() {
		return {
			theme: ''
		}
	},
	mounted() {
		this.theme = themeService.getCurrentTheme();
	},
}
</script>
<style>
:root {
	--toggle-bg: rgb(67, 124, 184);
	--toggle-bg-hover: rgb(79, 149, 223);
}
[data-theme='dark'] {
	--toggle-bg: #212121;
	--toggle-bg-hover: #373737;
}

.floatingBox {
	position: fixed;
	z-index: 1;
	bottom: 5%;
	left: 5px;
	padding: 0;

	border-radius: 8px;
	background-color: var(--toggle-bg);
}

.floatingBox li {
	display: flex;
	padding: 2px;
	list-style: none;
}

.floatingBox li:hover {
	background-color: var(--toggle-bg-hover);
	transform: scale(1.1);
}

.floatingBox li > img {
	width: 48px;
	/* max-height: 36px; */
	margin: auto;
}
</style>