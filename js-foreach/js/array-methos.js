console.log('Array methods')

// filter, map, find

// filter
// filtrare un array -> a partire da un array ci restituisce un nuovo array contenente solo alcuni element

const numeri = [2, 6, 9, 4, 5, 8, 7, 6, 10] // array<number>
console.log(numeri.includes(4)) // true | false
// [2,6,4,8,6,10]
// const numeriPari = numeri.filter((el) => {
// 	const resto = el % 2
// 	if (resto === 0) {
// 		return true
// 	} else {
// 		return false
// 	}
// 	// return boolean
// })

let numeriPari = numeri.filter((el) => el % 2 === 0) // array
// numeriPari = numeri.filter(isEven)

// console.log(isEven, isEven(2))

console.log(numeriPari)

function isEven(n) {
	return n % 2 === 0
}

// Map rimappiamo un array di dati.
// Ci ritorna un nuovo array, che avrò lo stesso numero di elementi dell'array originale

const utenti = [
	{
		name: 'Mario',
		age: 32,
		children: ['Marta'],
	},
	{
		name: 'Catertina',
		age: 23,
		children: ['Teresa', 'Antonio'],
	},
	{
		name: 'Carlo',
		age: 64,
		children: [],
	},
]

console.log(utenti)

utenti.forEach((el) => {
	el.cost = el.children.length * 200
	el.userName = el.name
})

console.log(utenti)

// ['Mario','Caterian','Carlo']
const nomiUtenti = utenti.map((el, i, array) => {
	return {
		userName: el.name,
		age: el.age,
		children: el.children,
		cost: el.children.length * 200,
	}
})

console.log(nomiUtenti)

const persone = [
	{
		id: 1,
		name: 'Mario',
		age: 32,
		children: ['Marta'],
	},
	{
		id: 2,
		name: 'Catertina',
		age: 23,
		children: ['Teresa', 'Antonio'],
	},
	{
		id: 3,
		name: 'Carlo',
		age: 64,
		children: [],
	},
]

// trovare la persona prima che ha 54 anni
let findedEl = persone.find((el, i, array) => {
	if (el.id === 3) {
		return true
	} else {
		false
	}
})

findedEl = persone.find((el) => el.age >= 54) // Object | undefined

console.log(findedEl)
