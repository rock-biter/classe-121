console.log('Arrow function')

let risultato = sum(10, 12)
console.log(risultato)

function sum(a, b) {
	return a + b
}

// Sintassi di versa
// non soggetta ad hoisting
const somma = (a, b) => {
	return a + b
}

// Ritorno implicito
const sub = (a, b) => a - b

risultato = sub(100, 15)
console.log(risultato)

const pow2 = (n) => n ** 2
risultato = pow2(10)
console.log(risultato)

const buttonEl = document.getElementById('ciao')

buttonEl.addEventListener('click', onclick) // this === buttonEl

function onClick() {
	console.log('click functione tradizionale')
	console.log(this) // object elemento sul quale abbiamo agganciato l'evento listener
	console.log(this === buttonEl)
}

// window.onClick()
onClick() // this === Window

buttonEl.addEventListener('click', () => {
	console.log('click arrow function')
	console.log(this) // object Window
	console.log(this === buttonEl)
})

const persona = {
	nome: 'Gianluca',
	onclick: onClick,
}

persona.onclick() // this === persona
