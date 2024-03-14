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

	const size = getSize() // number
	const numOfCells = size ** 2 // == 8 * 8

	gridEl.innerHTML = ''

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

		cellEl.addEventListener('click', function () {
			console.log('click sulla casella numero: ', num)

			cellEl.classList.toggle('bg-dark')
			// this.classList.add('bg-dark')
		})
	}
}

function getSize() {
	let size = 10
	let level = levelSelectEl.value

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
