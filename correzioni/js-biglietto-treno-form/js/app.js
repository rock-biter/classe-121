/**
 * Calcolo biglietto con form
 */

// creare gli elementi del form necessari per inserire i dati
// - creare un input per inserire i km
// - creare un input per inserire l'eta
// - creare il bottone che avvierà il nostro script

// al click sul pulsante calcolare il prezzo del biglietto
// devo ascoltare l'evento click sul pultante del form e agganciare una funzione che calcola il biglietto
// - recuperare dal dom il pulsante
const buttonElement = document.querySelector('[type="submit"]') // Element | null
console.log(buttonElement)
// - recupero dal dom i due input dei km e dell'età
const inputKmElement = document.getElementById('km')
// const inputEtaElement = document.getElementById('eta')
const selectScontoElement = document.getElementById('sconto')
console.log(selectScontoElement, inputKmElement)

const bigliettoElement = document.getElementById('biglietto')

// - agganciarci l'event listener che ascolate evento click
buttonElement.addEventListener('click', function () {
	console.log('click sul button')

	// 1. Chiedere all'utente il numero di km
	// salvare in una variabile lunghezzaViaggio il prompt dove chiediamo il numero di km
	const inputKmValue = inputKmElement.value
	const lunghezzaViaggio = parseFloat(inputKmValue)
	console.log('km: ', lunghezzaViaggio)

	// 2. Chiedere l'età del passeggero
	// salvare in una variabile eta il prompt dove chidiamo all'uitente la sua eta
	// const inputEtaValue = inputEtaElement.value
	// const eta = parseInt(inputEtaValue)
	// console.log('Età: ', eta)

	const selectScontoValue = selectScontoElement.value
	// const eta = parseInt(inputEtaValue)
	console.log('Sconto: ', selectScontoValue)

	// 3. calcolare il prezzo del biglietto
	// 3.a calcolare il prezzo base
	// (ogni km costa 0.21 euro) => nKm * costo per Km = prezzo base
	const prezzoBase = lunghezzaViaggio * 0.21
	console.log('prezzo base: ', prezzoBase)
	// 3.b calcolare lo sconto
	let sconto = 0
	// let pctSconto = 0

	if (selectScontoValue === '1') {
		// SE eta < 18
		// calcolo lo sconto del 20% => sconto = prezzo base * 0.2
		sconto = prezzoBase * 0.2 // * 20 / 100
		// pctSconto = 0.2
	} else if (selectScontoValue === '2') {
		// ALTRIMENTI SE eta > 65
		// calcolo lo sconto del 40% => sconto = prezzo base * 0.4
		sconto = prezzoBase * 0.4 // * 40 / 100
		// pctSconto = 0.4
	}
	// 3.c calcolare il prezzo finale = prezzo base - sconto
	// const prezzoFinale = prezzoBase * (1 - pctSconto)
	const prezzoFinale = prezzoBase - sconto

	// 4. stampare in console il prezzo con max 2 decimali
	console.log('prezzo finale', prezzoFinale.toFixed(2))
	// console.log(prezzoFinale)

	bigliettoElement.innerHTML = `
		<table>
			<thead>
				<tr>
					<th>Km</th>
					<th>sconto</th>
					<th>prezzo base</th>
					<th>prezzo finale</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>${lunghezzaViaggio} km</td>
					<td>${sconto.toFixed(2)} &euro;</td>
					<td>${prezzoBase.toFixed(2)} &euro;</td>
					<td>${prezzoFinale.toFixed(2)} &euro;</td>
				</tr>
			</tbody>
		</table>
	`
})

// - recuperare il numero di km dall'input dei km
//   - leggere l'attributo value dell'input dei km e salvarlo in una variabile
// - recuperare l'eta del passeggero dall'input dell'età
//   - leggere l'attributo valude dell'intpu dell'età e salvarlo in una variabile
// ...
