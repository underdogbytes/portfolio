<template>
	<ul class="floatingBox">
		<li>
			<a
				href="https://github.com/tocrossbridge"
				target="_blank"
				rel="noopener noreferrer"
			>
				<img
					src="@/assets/icons/github.svg"
					alt="Github icon"
				>
			</a>
		</li>
		<li>
			<a
				href="https://www.behance.net/bridgetocross"
				target="_blank"
				rel="noopener noreferrer"
			>
				<img
					src="@/assets/icons/behance.svg"
					alt="Behance icon"
				>
			</a>
		</li>
		<li>
			<a
				href="https://www.linkedin.com/in/btrz/"
				target="_blank"
				rel="noopener noreferrer"
			>
				<img
					src="@/assets/icons/linkedin.svg"
					alt="Linkedin icon"
				>
			</a>
		</li>
		<li>
			<theme-toggle-vue />
		</li>
	</ul>
</template>
<script>
import themeService from '@/common/services/theme';
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
	--toggle-bg: #0a81ab;
	--toggle-bg-hover: #4f95df;
}
[data-theme='dark'] {
	--toggle-bg: #374045;
	--toggle-bg-hover: #2d2d2d;
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

.floatingBox li img {
	width: 48px;
	/* max-height: 36px; */
	margin: auto;
}
</style>