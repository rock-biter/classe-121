console.log('Foreach') // Per ogni

const numeri = [2, 6, 5, 9, 4]
console.log(numeri)

// con il ciclo For
for (let i = 0; i < numeri.length; i++) {
	const element = numeri[i]
	console.log(element, i)
	// console.log('eccomi')
}

// con il Metodo forEach
numeri.forEach((element, i, array) => {
	console.log(element, i)
	console.log(numeri === array)
})

numeri.forEach((_, i) => console.log(i))

// numeri.forEach((el) => console.log(el))

// numeri.forEach(function (element, i, array) {
// 	console.log(element)
// })

// Invochiamo la nostra funxione forEach
forEach(function (element) {
	console.log(element)
}, numeri)

// funzioneForEach(element, i, array)

/**
 * Remake del metodo forEach degli array
 * @param {function} callbackFn
 */
function forEach(callbackFn, array) {
	for (let i = 0; i < array.length; i++) {
		const currentEl = array[i]
		callbackFn(currentEl, i, array)
	}
}

const array = []
array[100] = 'ciao'

console.log(array)

console.log('for')
for (let i = 0; i < array.length; i++) {
	if (array[i] !== undefined) {
		console.log(array[i])
	}
}

console.log('foreach')
array.forEach((el) => console.log(el))
