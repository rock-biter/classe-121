console.log('TIMING FN', window)

console.log('Prima del setTimeout')

let timeout = setTimeout(sayHello, 1000 * 2, 'Gianluca') // number

let timeout2 = setTimeout(() => {
	console.log('Arrivederci')
}, 5 * 1000)

console.log(timeout, timeout2)

// const num = prompt('Inserisci un numero')

console.log('Dopo il setTimeout')

function sayHello(nome) {
	console.log('Ciao ' + nome)
}

let counter = 0
let max = 10

// number
let interval = setInterval(increment, 1000, 2, true)

function increment(num, print) {
	counter += num
	if (print === true) {
		console.log(counter)
	}
}

let interval2 = setInterval(() => {
	console.log('Sono passati 5 secondi')
}, 5 * 1000)

document.getElementById('stop').addEventListener('click', function () {
	clearTimeout(timeout)
	clearTimeout(timeout2)

	clearInterval(interval)
	clearInterval(interval2)
})

console.log(interval, interval2)
