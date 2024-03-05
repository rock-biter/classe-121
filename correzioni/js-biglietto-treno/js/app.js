console.log('Calcolo biglietto')

/**
 * Il programma dovrà chiedere all’utente il numero di chilometri che vuole percorrere e l’età del passeggero.
Sulla base di queste informazioni dovrà calcolare il prezzo totale del viaggio, secondo queste regole:
il prezzo del biglietto è definito in base ai km (0.21 € al km)
va applicato uno sconto del 20% per i minorenni
oppure applicato uno sconto del 40% per gli over 65.
L’output del prezzo finale va stampato in console in forma “umana” cioè con al massimo due decimali, per indicare centesimi sul prezzo. Questo richiederà un minimo di ricerca.
 */

// 1. Chiedere all'utente il numero di km
// salvare in una variabile lunghezzaViaggio il prompt dove chiediamo il numero di km

const lunghezzaViaggio = parseFloat(prompt('Quanti km vuoi viaggiare?'))
console.log('km: ', lunghezzaViaggio)

// 2. Chiedere l'età del passeggero
// salvare in una variabile eta il prompt dove chidiamo all'uitente la sua eta
const eta = parseInt(prompt('Quanti anni hai?'))
console.log('Età: ', eta)

// validazione dei dati
// km > 0
// eta > 0
// km ed eta non sono NaN
if (
	lunghezzaViaggio > 0 &&
	eta > 0 &&
	!isNaN(lunghezzaViaggio) &&
	!isNaN(eta)
) {
	// 3. calcolare il prezzo del biglietto
	// 3.a calcolare il prezzo base
	// (ogni km costa 0.21 euro) => nKm * costo per Km = prezzo base
	const prezzoBase = lunghezzaViaggio * 0.21
	console.log('prezzo base: ', prezzoBase)
	// 3.b calcolare lo sconto
	let sconto = 0
	// let pctSconto = 0

	if (eta < 18) {
		// SE eta < 18
		// calcolo lo sconto del 20% => sconto = prezzo base * 0.2
		sconto = prezzoBase * 0.2 // * 20 / 100
		// pctSconto = 0.2
	} else if (eta < 65) {
		// ALTRIMENTI SE eta > 65
		// calcolo lo sconto del 40% => sconto = prezzo base * 0.4
		sconto = prezzoBase * 0.4 // * 40 / 100
		// pctSconto = 0.4
	}
	// else {
	//   // ALTRIMENTI
	//   // sconto = prezzo base * 0 = 0
	//   sconto = 0
	// }
	// 3.c calcolare il prezzo finale = prezzo base - sconto
	// const prezzoFinale = prezzoBase * (1 - pctSconto)
	const prezzoFinale = prezzoBase - sconto

	// 4. stampare in console il prezzo con max 2 decimali
	console.log('prezzo finale', prezzoFinale.toFixed(2))
	console.log(prezzoFinale)
} else {
	alert('I dati non sono validi!')
}
