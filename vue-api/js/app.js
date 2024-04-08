console.log('API')

const { createApp } = Vue

createApp({
	data() {
		return {
			message: 'Hello Vue!',
			number: null,
			numbers: [],
		}
	},
	methods: {
		fetchNumber() {
			axios
				.get('https://flynn.boolean.careers/exercises/api/random/int')
				.then((response) => {
					// dobbiamo usare una arrow function
					// console.log(this)
					console.log(response)
					console.log(response.data)
					console.log(response.data.response)
					this.number = response.data.response
				})
		},
		fetchNumbers(n) {
			for (let i = 0; i < n; i++) {
				axios
					.get('https://flynn.boolean.careers/exercises/api/random/int')
					.then((response) => {
						// console.log(this)
						this.numbers.push(response.data.response)
					})
			}
		},
	},
	created() {
		this.fetchNumber()
		this.fetchNumbers(10)
	},
}).mount('#app')

// const numeri = []
// // console.log(axios)
// // effetturare una chiuamata di tipo GET all'url: https://flynn.boolean.careers/exercises/api/random/int
// for (let i = 0; i < 10; i++) {
// 	axios
// 		.get('https://flynn.boolean.careers/exercises/api/random/int')
// 		.then(function (res) {
// 			console.log('quando arriva la risposta del server')
// 			// qui recuperiamo e usiamo i dati che ci arrivano dal server
// 			console.log(res)
// 			console.log(res.data)
// 			const num = res.data.response
// 			// console.log(num)
// 			numeri.push(num)

// 			console.log(numeri.length)

// 			// document.getElementById('number').innerHTML = num
// 		})

// 	// console.log(numeri.length)
// }

// console.log(numeri)
// numeri.forEach((num) => {
// 	console.log('num:', num)
// })

// console.log('Dopo aver inviato la richiesta')

// axios
// 	.get('https://flynn.boolean.careers/exercises/api/random/mail')
// 	.then((response) => {
// 		// console.log(response)
// 		// console.log(response.data)
// 		// console.log(response.data.response)
// 		// console.log(response.data.success)
// 		// console.log(response.status)
// 	})
