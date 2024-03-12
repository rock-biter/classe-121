console.log('JS Function') // invocazione del metodo log (funzione dentro ad un oggetto) // undefined

const number = parseInt('2') // number (2)

// invocazione della funzione
const somma = sum(number, 6) // number
// console.log(somma)

console.log('La somma è : ' + somma.toFixed(2) + ' Euro')

// dichiariamo un funziona che somma due numeri
// la funzione sum prende due numeri in ingresso e ci ritorna la somma
function sum(numA, numB) {
	// facciamo la somma di numA + numB
	const result = numA + numB // number
	console.log('somma: ', result)
	// ritorniamo la somma
	return result
}
