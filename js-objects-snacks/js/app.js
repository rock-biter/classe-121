console.log('JS Objects')

const monitor = {
	name: 'Monitor 32"',
	prezzo: 245,
	descrizione: 'Lorem impsum...',
	marca: 'LG',
}
console.log(monitor)

const lavatrice = {
	name: 'Nome lavatrice',
	prezzo: 450,
	descrizione: 'Lorem ipsum...',
	marca: 'Candy',
}
console.log(lavatrice)

// const prodotti = [
// 	monitor,
// 	lavatrice,
// 	{
// 		name: 'Tastiera Lopold',
// 		prezzo: 125,
// 		descrizione: 'Lorem ipsum...',
// 		marca: 'Leopold',
// 	},
// ]

const prodotti = []

prodotti.push(monitor, lavatrice)
prodotti.push({
	name: 'Tastiera Lopold',
	prezzo: 125,
	descrizione: 'Lorem ipsum...',
	marca: 'Leopold',
})

console.log(prodotti)

// const secondoEl = prodotti[1] // object
// console.log(secondoEl.prezzo)
// console.log(prodotti[1].prezzo, prodotti[1]['prezzo'])

// Stampare per ogni elemento dell'array prodotti il nome del prodotto
for (let i = 0; i < prodotti.length; i++) {
	const prodottoCorrente = prodotti[i] // object
	// console.log(i, prodottoCorrente)
	const message = `Nome: ${
		prodottoCorrente.name
	}, prezzo: ${prodottoCorrente.prezzo.toFixed(2)} Euro`
	console.log(message)
	// console.log(prodottoCorrente.name)
}
