console.log('ciclo for')

const numeriElement = document.querySelector('.numeri') // Object | null
numeriElement.classList.add('red')

let n = 100

for (let i = 0; i < n; ++i) {
	let num = i + 1
	console.log(num)

	const liString = `<li>${num}</li>` // string
	console.log(liString, typeof liString)
	// numeriElement.innerHTML += liString

	const liElement = document.createElement('li')
	console.dir(liElement)
	liElement.classList.add('item')
	liElement.innerHTML = num

	// liElement.addEventListener('click', function () {
	// 	console.log('click su numero: ', num)
	// })

	numeriElement.append(liElement)
	// if(num > 3) {
	//   console.log(num,'num > 3')
	// }
}

console.log('fine del primo ciclo')

for (let i = n; i > 0; i--) {
	console.log(i)
}

console.log('fine del secondo ciclo')

// come viene eseguito il ciclo for da JavaScript
// let i = 0

// if i < n => 0 < 10 => true
// log(i) => 0
// i++ => i => 1

// if i < n => 1 < 10 => true
// log(i) => 1
// i++ => i => 2

// if i < n => 2 < 10 => true
// log(i) => 2
// i++ => i => 3

//...alla decima iterazione
// if i < n => 9 < 10 => true
// log(i) => 9
// i++ => i => 10

// if i < n => 10 < 10 => false
