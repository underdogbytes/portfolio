<template>
	<div
		class="toggle"
		@click="toggleTheme()"
	>
		<img
			:src="toggleIcon"
			:alt="toggleAlt"
		>
	</div>
</template>

<script>
import themeService from '@/services/theme';
import dayIcon from '@/assets/icons/day.svg';
import nightIcon from '@/assets/icons/night.svg';

export default {
	data() {
		return {
			theme: ''
		}
	},
	mounted() {
		this.theme = themeService.getCurrentTheme();
	},
	computed: {
		toggleIcon() {
			return this.theme == 'light' ? dayIcon : nightIcon;
		},
		toggleAlt() {
			return this.theme == 'light'
				? 'Sun icon: click on me to show light mode'
				: 'Moon icon: click on me to show dark mode'
		}
	},
	methods: {
		toggleTheme() {
			this.theme = themeService.toggleTheme(this.theme);
			this.setAttributesTheme(this.theme);
		},
		setAttributesTheme(theme) {
			document.documentElement.setAttribute('data-theme', theme);
			localStorage.setItem('theme', theme);
		},
	},

}
</script>

<style>
.toggle :where(img) {
	display: block;
	width: 3em;
	height: 3em;
}
.toggle:hover :where(img) {
	animation: shakeIcon 1.5s, lsdIcon 1s;
	animation-iteration-count: infinite;
}

@keyframes lsdIcon {
	from {
		filter: drop-shadow(0 0 0.9rem #ff8080) drop-shadow(0 0 0.9rem #ffe488)
			drop-shadow(0 0 0.9rem #8cff85);
	}
	to {
		filter: drop-shadow(0 0 0.9rem #8cff85) drop-shadow(0 0 0.9rem #80c7ff)
			drop-shadow(0 0 0.9rem #e488ff);
	}
}

@keyframes shakeIcon {
	0% {
		transform: translate(1px, 1px) rotate(0deg);
	}
	10% {
		transform: translate(-1px, -2px) rotate(-1deg);
	}
	20% {
		transform: translate(-3px, 0px) rotate(1deg);
	}
	30% {
		transform: translate(3px, 2px) rotate(0deg);
	}
	40% {
		transform: translate(1px, -1px) rotate(1deg);
	}
	50% {
		transform: translate(-1px, 2px) rotate(-1deg);
	}
	60% {
		transform: translate(-3px, 1px) rotate(0deg);
	}
	70% {
		transform: translate(3px, 1px) rotate(-1deg);
	}
	80% {
		transform: translate(-1px, -1px) rotate(1deg);
	}
	90% {
		transform: translate(1px, 2px) rotate(0deg);
	}
	100% {
		transform: translate(1px, -2px) rotate(-1deg);
	}
}
</style>