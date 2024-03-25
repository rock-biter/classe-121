const { createApp } = Vue

createApp({
	data: function () {
		return {
			message: 'Hello Vue!',
			description: 'Lorem ipsum',
			// count: 5,
			lunghezzaViaggio: '',
			// items: ['Mario', 'Marta', 'Giuseppe'],
			discount: '',
			className: 'text-lg',
			// id: 'pippo',
			// srcImage:
			// 	'https://img.freepik.com/free-photo/rural-farm-landscape-with-farmhouse-meadow-trees-generative-ai_188544-7845.jpg',
			prezzoFinale: null,
		}
	},
	methods: {
		saluta() {
			console.log('Ciao')
		},
		calcolaPrezzo: function () {
			console.log('Calcolo il prezzo del biglietto')

			// prezzo base km * 0.21
			console.log('km: ', this.lunghezzaViaggio)
			const prezzoBase = this.lunghezzaViaggio * 0.21
			console.log(prezzoBase)

			let sconto = 0
			// console.log(this.discount, typeof this.discount)
			if (this.discount === '1') {
				// sconto minorenni
				sconto = prezzoBase * 0.2
			} else if (this.discount === '2') {
				// over 65
				sconto = prezzoBase * 0.4
			}

			let prezzo = prezzoBase - sconto
			this.prezzoFinale = prezzo
			// console.log(prezzoFinale)
			this.lunghezzaViaggio = ''
			this.discount = ''
		},
		getRandom() {
			return Math.floor(Math.random() * 10)
		},
	},
}).mount('#app')

// function calcolaPerzzo(km, sconto) {
//   const prezzo = km * 0.21
//   return prezzo
// }

// let count = 5
// let message = 'Ciao Mondo'
// const el = document.getElementByID('qualcosa)
// el.innerHTML = `${count} utenti loggati`
