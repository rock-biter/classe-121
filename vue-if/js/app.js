const { createApp } = Vue

createApp({
	data() {
		return {
			nomi: ['Gianni', 'Filippo', 'Carla'],
			open: false,
			teams: [
				{
					name: 'Gianni',
					job: 'Creative Developer',
				},
				{
					name: 'Mimmo',
					job: 'Junior FrontEnd Developer',
				},
				{
					name: 'Sara',
					job: 'Graphic Designer',
				},
			],
			currentTabIndex: 0,
			tabs: [
				{
					title: 'Utenti',
					content:
						'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis?',
				},
				{
					title: 'Posts',
					content:
						'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis?',
				},
				{
					title: 'Pagamenti',
					content:
						'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis?',
				},
				{
					title: 'Notifiche',
					content:
						'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium.',
				},
			],
			dropdownMenu: [
				{
					text: 'Profilo',
					href: '#profile',
				},
				{
					text: 'Repositories',
					href: '#repo',
				},
				{
					text: 'Settings',
					href: '#settings',
				},
				{
					text: 'Logout',
					href: '#logout',
				},
			],
		}
	},
	methods: {
		isEven(n) {
			if (n % 2 === 0) {
				return true
			} else {
				return false
			}
		},
		isMultipleOf(n, divisore) {
			if (n % divisore === 0) {
				return true
			} else {
				return false
			}
		},
		dropdownToggle() {
			// this.open = !this.open

			if (this.open === true) {
				this.open = false
			} else {
				this.open = true
			}
		},
	},
	mounted() {
		console.log(this.teams[0])
		this.teams[0].name = 'Pippo'
	},
}).mount('#app')

// createApp({
// 	data() {
// 		return {
// 			message: 'Hello Vue!',
// 			lunghezzaViaggio: '',
// 			discount: '',
// 			prezzoFinale: null,
// 			prezzoBase: 0,
// 		}
// 	},
// 	methods: {
// 		getDiscount() {
// 			let sconto = 0
// 			// console.log(this.discount, typeof this.discount)
// 			if (this.discount === '1') {
// 				// sconto minorenni
// 				sconto = this.prezzoBase * 0.2
// 			} else if (this.discount === '2') {
// 				// over 65
// 				sconto = this.prezzoBase * 0.4
// 			}

// 			return sconto
// 		},
// 		calcolaPrezzo: function () {
// 			console.log('Calcolo il prezzo del biglietto')

// 			// prezzo base km * 0.21
// 			console.log('km: ', this.lunghezzaViaggio)
// 			this.prezzoBase = this.lunghezzaViaggio * 0.21
// 			console.log(this.prezzoBase)

// 			let sconto = this.getDiscount()

// 			let prezzo = this.prezzoBase - sconto
// 			this.prezzoFinale = prezzo
// 		},
// 	},
// }).mount('#app')

// const persona = {
// 	name: 'Gianni',
// 	age: 33,
// 	saluta() {
// 		console.log(this)
// 		console.log(`Ciao mi chiamo ${this.name} e ho ${this.age} anni.`)
// 	},
// }

// const maria = {
// 	name: 'Maria',
// 	age: 27,
// 	saluta() {
// 		console.log(this)
// 		console.log(`Ciao mi chiamo ${this.name} e ho ${this.age} anni.`)
// 	},
// }

// persona.saluta() // this dentro a saluta = persona
// maria.saluta() // this dentro a saluta = maria

// const saluta = persona.saluta
// // const { saluta } = persona
// saluta() // this dentro saluta = window

// const vueApp = {
// 	message: 'Hello Vue!',
// 	lunghezzaViaggio: 23,
// 	discount: '1',
// 	prezzoFinale: null,
// 	prezzoBase: 0,
// 	calcolaPrezzo: function () {
// 		console.log('Calcolo il prezzo del biglietto')

// 		// prezzo base km * 0.21
// 		console.log('km: ', this.lunghezzaViaggio)
// 		this.prezzoBase = this.lunghezzaViaggio * 0.21
// 		console.log(this.prezzoBase)

// 		let sconto = 0
// 		// console.log(this.discount, typeof this.discount)
// 		if (this.discount === '1') {
// 			// sconto minorenni
// 			sconto = this.prezzoBase * 0.2
// 		} else if (this.discount === '2') {
// 			// over 65
// 			sconto = this.prezzoBase * 0.4
// 		}

// 		let prezzo = this.prezzoBase - sconto
// 		this.prezzoFinale = prezzo
// 		// console.log(prezzoFinale)
// 		// this.lunghezzaViaggio = ''
// 		// this.discount = ''
// 	},
// }

// vueApp.calcolaPrezzo()
// console.log(vueApp)

const nomi = ['Gianni', 'Filippo', 'Carla']

nomi.forEach((currentElement, i) => {
	// console.log(i, currentElement)
})

for (let i = 0; i < 100; i++) {
	const n = i + 1
	// console.log(i, n)
}

// console.log(n) // n is not defined

// let A0 = 1
// let A1 = 2
// let A2 = A0 + A1 // 1 + 2

// console.log('A2 =', A2) // 3

// A0 = 2
// console.log('A2 =', A2) // Still 3
