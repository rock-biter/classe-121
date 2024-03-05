console.log('JS + HTML')

// get element by id restituisce un solo elemento
const mainTitleElement = document.getElementById('main-title') // Element | null
// const mainTitleElement = document.querySelector('#main-title') // Element | null

console.log(mainTitleElement)

const element = document.querySelector('.categories') // Element | null
// console.log(element)

console.log(element.className)
// element.className = element.className + ' d-flex'
// element.className += ' d-flex'

element.classList.add('d-flex')
element.classList.remove('text-lg')

// element.remove()
// console.log(element)

// let a = 10
// a = a + 1
// a += 1

// Aggiungere stile in linea ad un elemento del DOM
// element.style.display = 'flex'
// element.style.backgroundColor = '#2794dc'

const submitElement = document.getElementById('submit') // Element | null
// const submitElement = document.querySelector('[type="submit"]') // Element | null
console.dir(submitElement)
const inputNameElement = document.getElementById('name')
console.log(inputNameElement)
const inputEmailElement = document.getElementById('email')
console.log(inputEmailElement)

let name,
	email = ''

// aggiungiamo il listenere del clic sul pulsante
submitElement.addEventListener('click', function () {
	console.log('click sul button')

	name = inputNameElement.value // string
	email = inputEmailElement.value // string

	console.log(name, email)

	// mainTitleElement.innerHTML =
	// 	'<span class="red">' + name + '</span><br><span>' + email + '</span>'
	mainTitleElement.innerHTML += `
    <span class="red">${name}</span>
    <br>
    <span>${email}<span>
  `

	mainTitleElement.append('<a href="./contatti.html">Clicca</a>')
})

console.log(name, email)
