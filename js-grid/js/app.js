console.log('Griglia dinamica')

// container della griglia
const gridEl = document.querySelector('.grid')
console.log(gridEl)

// pulsante genera
const resetButtonEl = document.getElementById('reset')
console.log(resetButtonEl)

// select difficoltà
const levelSelectEl = document.getElementById('level')
console.log(levelSelectEl)

// startGame()

resetButtonEl.addEventListener('click', startGame)

function startGame() {
	console.log('reset game')

	/**
	 * Size of the grid
	 */
	const size = getSize(levelSelectEl.value) // number

	const bombe = generaBombe(16, 1, size ** 2) // array [1,6,9,12,56,32,64,..] 16
	console.log(bombe)

	/**
	 * Reset cells
	 */
	resetGrid(size, bombe)
}

function resetGrid(size, bombe) {
	// Punteggio
	// let score = 0
	let isRunning = true

	const numOfCells = size ** 2 // == 8 * 8
	gridEl.innerHTML = ''

	// Numero massimo di caselle non bombe
	const maxScore = numOfCells - bombe.length
	console.log(maxScore)

	const clickedCells = []
	const cellElements = []

	for (let i = 0; i < numOfCells; i++) {
		const num = i + 1
		// console.log(num)
		// const cellString = `<div class="cell">${num}</div>` //string
		// gridEl.innerHTML += cellString

		const cellEl = document.createElement('div') // object
		cellEl.className = 'cell'
		cellEl.innerHTML = num
		cellEl.style.width = `calc(100% / ${size})`

		gridEl.append(cellEl)
		cellElements.push(cellEl)

		cellEl.addEventListener('click', function () {
			console.log('click sulla casella numero: ', num)

			// SE il gioco è finito isRunning === false
			if (isRunning === false) {
				return
			}

			if (clickedCells.includes(num)) {
				return
			}

			// SE la casella corrisponde ad una bomba (il numero è presente nell'araay dei numeri delle bombe)
			if (bombe.includes(num)) {
				// - aggiungo la classe bg-red alla cella
				console.log('è una bomba')
				cellEl.classList.add('bg-red')
				// la partita termina
				alert(`Hai perso! Puntit totalizzati: ${clickedCells.length} p.ti`)
				isRunning = false

				// PER OGNI cella dell'array di celle
				// -- SE numero della cella è nelle bombe
				// ---- aggiungiamo alla cella la classe gb-red
			} else {
				clickedCells.push(num)
				// ALTRIMENTI
				// - aggiungo la classe bg-green
				console.log('non è una bomba')
				cellEl.classList.add('bg-green')
				// incrementare il punteggio
				// ci serve un variabile score che incrementiamo
				// score++
				console.log('Punti: ', clickedCells.length)

				// controllare se l'utente ha vinto
				// SE clickedCells ha un numero di elementi === maxScore
				if (clickedCells.length === maxScore) {
					alert(`Complimenti! Hai vinto e il punteggio è ${maxScore} p.ti`)
					isRunning = false
				}
				// - Allore l'utente ha vinto la partita
			}

			console.log(clickedCells)

			// cellEl.classList.toggle('bg-dark')
			// this.classList.add('bg-dark')
		})
	}
}

function getSize(level) {
	let size = 10
	// let level = value

	// SE value della select === '3'
	if (level === '3') {
		// - size = 7
		size = 7
	} else if (level === '2') {
		// ALTRIMENTI SE value della select === '2'
		// - size = 9
		size = 9
	}

	// return size
	return size
}

// Funzione che genera le bombe
// Ricevere come input:
// - il numero di nueri da generare,
// - il valore min del range in cui generare i numeri random
// - valore max del range in cui generare i numeri random
function generaBombe(length, min, max) {
	console.log(length, min, max)

	const bombs = []

	// tutta la nostra logica
	// for (let i = 0; i < length; i++) {
	while (bombs.length < length) {
		// generiamo un numero intero da min e max
		const num = getRandomIntInclusive(min, max)

		// SE il numerp non è presente nell árray bombs
		if (!bombs.includes(num)) {
			// allora lo pushiamo
			bombs.push(num)
		}
	}
	// }

	return bombs
}

function getRandomIntInclusive(min, max) {
	const minCeiled = Math.ceil(min)
	const maxFloored = Math.floor(max)
	return Math.floor(Math.random() * (maxFloored - minCeiled + 1) + minCeiled) // The maximum is inclusive and the minimum is inclusive
}

/**
 * 
 * Copiamo la griglia fatta ieri nella nuova repo e aggiungiamo la logica del gioco (attenzione: non bisogna copiare tutta la cartella dell'esercizio ma solo l'index.html, e le cartelle js/ css/ con i relativi script e fogli di stile, per evitare problemi con l'inizializzazione di git).

Il computer deve generare 16 numeri casuali nello stesso range della difficoltà prescelta: le bombe. Attenzione: nella stessa cella può essere posizionata al massimo una bomba, perciò nell’array delle bombe non potranno esserci due numeri uguali.

In seguito l'utente clicca su una cella: se il numero è presente nella lista dei numeri generati - abbiamo calpestato una bomba - la cella si colora di rosso e la partita termina. Altrimenti la cella cliccata si colora di azzurro e l'utente può continuare a cliccare sulle altre celle.

La partita termina quando il giocatore clicca su una bomba o quando raggiunge il numero massimo possibile di numeri consentiti (ovvero quando ha rivelato tutte le celle che non sono bombe).

Al termine della partita il software deve comunicare il punteggio, cioè il numero di volte che l’utente ha cliccato su una cella che non era una bomba.
 */
