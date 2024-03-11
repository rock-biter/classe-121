console.log('while loop')

// CHIEDERE ALL'UTENTE DI INSERIRE UN NUMERO FINCHÈ IL NUMERO INSERITO NON È MAGGIORE DI 0
// let numero = parseInt(prompt('Inseirsci un numero maggiore di 0')) // number

// while (numero <= 0 || isNaN(numero) /** condizione (true | false) */) {
// 	// il codice viene esequito se la condizione è true
// 	console.log('dentro il while', numero)

// 	numero = parseInt(prompt('Inserisci un numero maggiore di 0')) // number
// 	// chiedere nuovamente un numero se il numero inserito non è maggiore di 0
// }

// console.log('dopo il while', numero)

// SOMMARE GLI EMENTI DI UN ARRAY FINCHÈ LA SOMMA È < 100
// const numeri = [25, 36, 4, 84, 9, -15, 2, -45, 20, 10, 20] // [1,2,6,3,6]

// let sum = 0

// // for (let i = 0; i < numeri.length; i++) {
// // 	const num = numeri[i]
// // 	console.log(num)
// // 	sum += num
// // 	console.log('somma parziale: ', sum)
// // }

// let i = 0

// while (sum < 100 && i < numeri.length) {
// 	const num = numeri[i]
// 	console.log(num)
// 	sum += num
// 	i++
// 	console.log('somma parziale: ', sum)
// }

// console.log('somma: ', sum)

// let numero = Math.floor(Math.random() * 100) // 0 - 99
// console.log(numero, numero % 3)

// while (numero % 3 !== 0) {
// 	// numero non è multiplo 3

// 	numero = Math.floor(Math.random() * 100)
// 	console.log(numero, numero % 3)
// }

// console.log(numero) // numero % 3 === 0 => true

let numero

do {
	numero = Math.floor(Math.random() * 100)
	console.log(numero, numero % 3)
} while (numero % 3 !== 0)

console.log(numero)
