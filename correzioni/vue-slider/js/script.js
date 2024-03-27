const slides = [
	{
		image: './img/01.webp',
		title: "Marvel's Spiderman Miles Morale",
		text: 'Experience the rise of Miles Morales as the new hero masters incredible, explosive new powers to become his own Spider-Man.',
	},
	{
		image: './img/02.webp',
		title: 'Ratchet & Clank: Rift Apart',
		text: 'Go dimension-hopping with Ratchet and Clank as they take on an evil emperor from another reality.',
	},
	{
		image: './img/03.webp',
		title: 'Fortnite',
		text: 'Grab all of your friends and drop into Epic Games Fortnite, a massive 100 - player face - off that combines looting, crafting, shootouts and chaos.',
	},
	{
		image: './img/04.webp',
		title: 'Stray',
		text: 'Lost, injured and alone, a stray cat must untangle an ancient mystery to escape a long-forgotten city',
	},
	{
		image: './img/05.webp',
		title: "Marvel's Avengers",
		text: "Marvel's Avengers is an epic, third-person, action-adventure game that combines an original, cinematic story with single-player and co-operative gameplay.",
	},
]

// console.log(slides)

const { createApp } = Vue

createApp({
	data() {
		return {
			slides: slides,
			currentIndex: 0,
			autoplay: null,
			direction: 1,
		}
	},
	methods: {
		nextSlide() {
			if (this.currentIndex < this.slides.length - 1) {
				this.currentIndex++
			} else {
				this.currentIndex = 0
			}
		},
		prevSlide() {
			if (this.currentIndex > 0) {
				this.currentIndex--
			} else {
				this.currentIndex = this.slides.length - 1
			}
			// if (this.currentIndex === 0) {
			// 	this.currentIndex = this.slides.length - 1
			// } else {
			// 	this.currentIndex--
			// }
		},
		stopInterval() {
			if (this.autoplay !== null) {
				clearInterval(this.autoplay)
				this.autoplay = null
			}
		},
		startInterval() {
			this.autoplay = setInterval(this.changeSlide, 1000)
		},
		changeSlide() {
			if (this.direction === 1) {
				this.nextSlide()
			} else {
				this.prevSlide()
			}
		},
		changeDirection() {
			if (this.direction === 1) {
				this.direction = -1
			} else {
				this.direction = 1
			}
		},
	},
	mounted() {
		this.startInterval()
	},
}).mount('#app')
