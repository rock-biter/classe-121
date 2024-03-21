/**
 * SNACK 3
 * Creare un array di oggetti:
Ogni oggetto descriverà una bici da corsa con le seguenti proprietà: nome e peso.
Stampare in console la bici con peso minore utilizzando destructuring e template literal
 */

const biciclette = [
	{
		nome: 'Marca 1',
		peso: 6.3,
	},
	{
		nome: 'Marca 2',
		peso: 7.8,
	},
	{
		nome: 'Marca 3',
		peso: 9.1,
	},
	{
		nome: 'Marca 1',
		peso: 8.5,
	},
	{
		nome: 'Marca 2',
		peso: 5.9,
	},
	{
		nome: 'Marca 4',
		peso: 9.9,
	},
]

// memorizziamo che la bici piu leggera è la prima
let biciPiuLeggera = biciclette[0]
// console.log('più leggera:', biciPiuLeggera)

for (let i = 1; i < biciclette.length; i++) {
	const bici = biciclette[i]
	// console.log(bici)

	// constrollo se partiamo da 0 con biciPiuLeggera undefined
	// if (biciPiuLeggera === undefined) {
	// 	biciPiuLeggera = bici
	// } else
	if (bici.peso < biciPiuLeggera.peso) {
		biciPiuLeggera = bici
	}
	// console.log(bici, biciPiuLeggera)
}

// const sortedBikes = biciclette.toSorted((bici1, bici2) => {
//   return bici1.peso - bici2.peso
// 	// if (bici1.peso < bici2.peso) {
// 	// 	return -1
// 	// } else if (bici1.peso > bici2.peso) {
// 	// 	return 1
// 	// } else {
// 	// 	return 0
// 	// }
// })

const sortedBikes = biciclette.toSorted(
	(biciA, biciB) => biciB.peso - biciA.peso
)

console.log(sortedBikes, biciclette)

biciPiuLeggera = sortedBikes[0]

const { peso, nome } = biciPiuLeggera

console.log(`La bici ${nome} è più leggera e pesa ${peso} kg`)

// const numeri = [0, 1, 2, 2, 5, 6, 8, 9]

/**
 * 
 * SNACK 4
Creare un array di oggetti di squadre di calcio.
Ogni squadra avrà diverse proprietà: nome, punti fatti, falli subiti.
Nome sarà l’unica proprietà da compilare, le altre saranno tutte settate a 0.
Generare numeri random al posto degli 0 nelle proprietà: punti fatti e falli subiti.
Infine usando la destrutturazione creiamo un nuovo array i cui elementi contengono solo nomi e falli subiti e stampiamo tutto in console.

 */

const squadre = [
	{
		name: 'Juve',
		points: 0,
		fouls: 0,
	},
	{
		name: 'Milan',
		points: 0,
		fouls: 0,
	},
	{
		name: 'Napule',
		points: 0,
		fouls: 0,
	},
	{
		name: 'Torino',
		points: 0,
		fouls: 0,
	},
	{
		name: 'Bologna',
		points: 0,
		fouls: 0,
	},
	{
		name: 'Roma',
		points: 0,
		fouls: 0,
	},
	{
		name: 'Inda',
		points: 0,
		fouls: 0,
	},
	{
		name: 'Lazio',
		points: 0,
		fouls: 0,
	},
	{
		name: 'Atalanta',
		points: 0,
		fouls: 0,
	},
]

console.log(squadre)

squadre.forEach((squadra) => {
	squadra.fouls = random(100)
	squadra.points = random(85)
})

// const messages = squadre.map((squadra) => {
// 	const { name, fouls } = squadra
// 	return `La squadra ${name} ha subito ${fouls} falli durante il campinato.`
// })

const messages = squadre.map(({ name, fouls }) => {
	return `La squadra ${name} ha subito ${fouls} falli durante il campinato.`
})

console.log(messages)

function random(max) {
	return Math.floor(Math.random() * max) + 1
}

// console.log(random(10))
