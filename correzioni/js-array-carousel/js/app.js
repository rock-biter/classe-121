console.log('carosello')

// questi vanno recuperati dopo se si usa innerHtml
const prevElement = document.querySelector('.control-prev')
const nextElement = document.querySelector('.control-next')
console.dir(prevElement)

const slidesSrc = [
	'./img/01.webp',
	'./img/02.webp',
	'./img/03.webp',
	'./img/04.webp',
	'./img/05.webp',
]

console.log(slidesSrc)

const carouselElement = document.querySelector('.carousel')
console.log(carouselElement)

const slideElements = []

// per ogni src dobbiamo creare la slide e inserirla dentro al carosello
for (let i = 0; i < slidesSrc.length; i++) {
	const currentSrc = slidesSrc[i]
	// console.log(i, currentSrc)
	let className = 'slide'

	// - se la slide è la prima slide
	if (i === 0) {
		// -- allora aggiungia la classe active
		className += ' active'
	}

	// const slideString = `
	//   <div class="${className}">
	//     <img src="${currentSrc}" alt="" />
	//   </div>
	// `
	const slideElement = document.createElement('div')
	slideElement.className = className
	slideElement.innerHTML = `<img src="${currentSrc}" alt="" />`

	console.dir(slideElement)

	// carouselElement.innerHTML += slideString
	carouselElement.appendChild(slideElement)
	slideElements.push(slideElement)

	// console.log(slideString)
}

// const slideElements = document.querySelectorAll('.carousel > .slide') // getElementByClassName('slide')
console.log(slideElements)

let currentIndex = 0
const lastIndex = slideElements.length - 1

nextElement.addEventListener('click', function () {
	console.log('prossima slide')

	// prendere la slide corrente
	// togliere la classe active
	// if (currentIndex < lastIndex) {
	slideElements[currentIndex].classList.remove('active')

	if (currentIndex < lastIndex) {
		currentIndex++
	} else {
		currentIndex = 0
	}

	// prendere la slide successiva
	// aggiungere la classe active
	slideElements[currentIndex].classList.add('active')
	// }
})

prevElement.addEventListener('click', function () {
	console.log('slide precedente')

	// if (currentIndex > 0) {
	// prendere la slide corrente
	// togliere la classe active
	slideElements[currentIndex].classList.remove('active')

	if (currentIndex > 0) {
		currentIndex--
	} else {
		currentIndex = lastIndex // array.length - 1
	}
	// prendere la slide precendente
	// aggiungere la classe active
	slideElements[currentIndex].classList.add('active')
	// }
})
