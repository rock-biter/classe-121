console.log('JS Objects')

// const p = document.createElement('p')
// console.log(p.innerHTML)

// Oggetto rappresenta una persona
const persona = {
	nome: 'Gianluca',
	cognome: 'Lomarco',
	celibe: false,
	children: ['Cate', 'Benni', 'Chiara'],
	0: 'mamma',
} // object

console.log(persona)

// stampiamo il nome della persona
console.log(persona.nome)

// leggiamo una proprietà che non esiste nell'oggeto
console.log(persona.age, persona)

// settare un valore ad una proprietà
// domElement.innerHTML += 'Ciao mondo'

persona.age = 33
persona.age += 1

persona['age'] = 45
const array = [1, 2, 3, 4]
array[2] = 6
console.log(array.length, array['length'])

for (let i = 0; i < array.length; i++) {
	console.log(i, array[i], array.i, array['i']) // array[0]
	// console.log()
}

let prop = 'age'

persona[prop] = 23 // persona['age'] e non persona.prop
persona.prop = 'Pippo' //

console.log(persona)

// cicliamo l'oggetto persona
for (let key in persona) {
	console.log('key =', key) // key è una stringa
	console.log(persona.key, persona[key])
}
