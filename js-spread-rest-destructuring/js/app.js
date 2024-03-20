console.log('ciao')

// destrutturatione di oggetti

const student = {
	id: 213,
	height: 183,
	name: 'Marco della Rovere',
	data: '35/15/2026',
	grades: 78,
	age: 23,
	children: ['Anita'],
}
console.log(student)

// const name = student.name
// const id = student.id
// const grades = student.grades
// const age = student.age
// const weight = student.weight
const name = 'Gianni'

const {
	name: studentName,
	id: id,
	weight,
	age,
	grades,
	...altreProps // rest operator
} = student
console.log(studentName, id, grades, age, weight, altreProps)

const newStudent = {
	name: studentName,
	id,
	grades, //grades: grades,
	age,
	weight: 85,
}

console.log(newStudent)

// destrutturazione array
const nomi = ['Gianni', 'Valerio', 'Vito', 'Gino', 'Marta', 'Simonetta']

// const primo = nomi[0]
// const secondo = nomi[1]
// const terzo = nomi[2]
const [primo, , terzo, ...altriNomi] = nomi
console.log(primo, terzo, altriNomi)

let q = nomi[5]

const nomeCompleto = ['Gianluca', 'Lomarco']
// const nome = nomeCompleto[0]
// const cognome = nomeCompleto[1]
const [nome, cognome] = nomeCompleto

const pippo = 'pippo'
const [firstChar, ...rest] = pippo
console.log(firstChar, rest)
const newPippo = firstChar.toUpperCase() + rest.join('').toLowerCase()

console.log(newPippo)

// spread array
const numeri = [12, 56, 9, 6, 3, 4]

const copiaNumeri = [12, ...numeri, 10, 1, 0] //spread operato
// copiaNumeri.push(10)
const arrayNumeri = [numeri] // array che continet un array
// numeri.forEach((num) => copiaNumeri.push(num))
console.log(numeri, copiaNumeri, arrayNumeri)

const arrai1 = ['a', 'b', 'c']
const array2 = ['d', 'e', 'f']

const arrayCompleto = [...arrai1, ...array2]
// const arrayCompleto = arrai1.concat(array2, arrai1)
console.log(arrayCompleto, arrai1, array2)

// const numero = ...numeri // questo non possiamo farlo

// spread oggetti
const prodotto = {
	name: 'TV OLED',
	price: 2399,
	brand: 'Samsung',
	modello: 'bla bla bla',
	id: 123,
	description: 'lorem ipsum',
	srcImg: './img/monitor.jpg',
	// name: 'TV OLED 4k'
	// ...
}

const newProduct = {
	...prodotto,
	modello: 'blu blu blu',
	srcImg: './img/monitor-2.jpg',
	discount: 10,
	discuntedPrice: prodotto.price * (1 - 0.1),
}

// const newProd = ...prodotto // questo non possiamo farlo

console.log(prodotto, newProduct)

function clonaOggeto1(object) {
	return {
		...object,
	}

	// return object
}

function clonaStudente({ id, name, grades }) {
	// const { id, name, grades } = studente

	return { id, name, grades }

	// return object studente
}

const studente = {
	id: 213,
	name: 'Marco della Rovere',
	grades: 78,
}

console.log(clonaStudente(studente))

// rest operator

// function sum(a, b, c = 0, d = 0, e = 0, f = 0, g = 0) {
// 	return a + b + c + d + e + f + g
// }

// rest operator nella dichiarazione dei paramentri
function sum(a = 0, b = 0, ...numeri) {
	console.log(numeri)
	let res = a + b

	numeri.forEach((num) => (res += num))

	return res
}

console.log(sum())
console.log(sum(5))
console.log(sum(10, 21))
console.log(sum(10, 21, 24))
console.log(sum(10, 21, 24, 23, 10, 23, 56, 49, 15))

const numeriDaSommare = [12, 56, 9, 6, 3, 4]

const massimo = Math.max(1, 6, 9, -10, 23, 10)
console.log(massimo)

const minimo = Math.min(...numeri)
console.log(minimo)

const somma = sum(...numeriDaSommare) // spread operator nell'invocazione della funzione
console.log(somma)

// operatore ternario

const numero = 10

let message = ''

if (numero > 5) {
	message = 'Maggiore di 5'
} else if (numero === 5) {
	message = 'è uguale a 5'
} else {
	message = 'Minore di 5'
}

// questo funziona ma fa molto schifo. non fatelo
message =
	numero > 5 ? 'Maggiore di 5' : numero === 5 ? 'è uguale a 5' : 'Minore di 5'

let ePari

if (numero % 2 === 0) {
	ePari = true
} else {
	ePari = false
}

ePari = numero % 2 === 0 ? true : false

console.log(message, ePari)

if (numero === 0) {
	console.log('il numero è zero')
} else {
	console.log('no è zero')
}

// funziona ma meglio il classico if / else
numero === 0 ? console.log('il numero è zero') : console.log('no è zero')
