const studenti = [
	'Paolo Calcagni',
	'Mattia Bologna',
	'Andrea Calligari',
	'Alessandro Casalaspro',
	'Rocco Cerro',
	'Antonino Cicala',
	'Enrico Clementi',
	'Marco Colloca',
	'Gabriele Corbani',
	'Christian Corelli',
	'Ianis Cozlov',
	'Pietro Cruciata',
	"Carmine D'Oronzo",
	'Domenico De Salvo',
	'Giulio Valerio Favia',
	'Roberto Giorgetta',
	'Valerio Gonini',
	'Nicola Osama Hajjam',
	'Moustafa Ibrahim',
	'Marina Lasorsa',
	'Tomasz Mach',
	'Marco Magnano',
	'Orlando Manfredini',
	'Riccardo Marino',
	'Francesco Matteucci',
	'Fabio Mazzilli',
	'Davide Morellato',
	'Rachel Anne Rabang Patrocinio',
	'Luigi Antony Riva',
	'Gianni Saladino',
	'Fabrizio Scorza',
	'Giovanni Sorrentino',
	'Vincenzo Speciale',
	'Mattia Turini',
	'Francesca Barletta',
]

function getRandomElement(studenti) {
	const i = Math.floor(Math.random() * studenti.length)

	return studenti[i]
}

const studentEl = document.getElementById('student')
const randomizeButton = document.getElementById('randomize')

randomizeButton.addEventListener('click', () => {
	studentEl.innerHTML = getRandomElement(studenti)
})
