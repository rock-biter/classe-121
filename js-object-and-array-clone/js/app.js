console.log('Valore o riferimento')

const a = 20
let b = a

b++

console.log(a, b)

const nome = 'Pippo'
let altroNome = nome // il contenuto di nome viene copiato per valore

altroNome += ' è bello!'

console.log(nome, altroNome)

const numeri = [2, 3, 5, 9, 4, 6, 8] // riferimento della porzione di memoria in cui js va salvare l'array [2, 3, 5, 9, 4, 6, 8]
// const copiaNumeri = [] // per riferimento
const falseCopia = numeri

// numeri.forEach((el) => copiaNumeri.push(el))
const copiaNumeri = numeri.map((el) => {
	return el
})

numeri.push(20)
copiaNumeri.push(15)

console.log(numeri, copiaNumeri)
console.log(numeri === copiaNumeri)

const persona = {
	name: 'Gianni',
	age: 32,
}

const altraPersona = {}

for (let key in persona) {
	altraPersona[key] = persona[key]
}

// altraPersona.name = 'Maria'

console.log(persona, altraPersona)
console.log(persona === altraPersona)

const utenti = [
	{
		name: 'Mario',
		children: ['Anita'],
	},
	{
		name: 'Cate',
		children: ['Anita'],
	},
	{
		name: 'Gino',
		children: ['Anita'],
	},
]

const utentiInvertiti = utenti.reverse()

const copiaUtenti = utenti.map((el) => {
	return {
		name: el.name,
		children: el.children,
	}
})

copiaUtenti.push({
	name: 'Pippo',
})

utenti[0].name = 'Antonio'
utenti[0].children.push('Chiara')

console.log(utenti, copiaUtenti)
