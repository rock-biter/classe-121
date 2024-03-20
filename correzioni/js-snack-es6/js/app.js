console.log('js snacks')

const tableName = 'Tavolo VIP'

const guests = [
	'Brad Pitt',
	'Johnny Depp',
	'Lady Gaga',
	'Cristiano Ronaldo',
	'Georgina Rodriguez',
	'Chiara Ferragni',
	'Fedez',
	'George Clooney',
	'Amal Clooney',
	'Maneskin',
]

function toObject(name, order, tableName) {
	return {
		tableName: tableName,
		name: name,
		order: order,
	}
}

// VERSIONE MAP CON RITORNO ESPLICITO
// const guestObjects = guests.map((guestName, i) => {
// 	const order = i + 1
// 	const guestObject = toObject(guestName, order, tableName)
// 	return guestObject
// })

// VERSIONE MAP CON RITORNO IMPLICITO
const guestObjects = guests.map((guestName, i) =>
	toObject(guestName, i + 1, tableName)
)

// VERSIONE CON CICLO FOR
// const guestObjects = []

// for (let i = 0; i < guests.length; i++) {
// 	const guestName = guests[i]
// 	const order = i + 1
// 	const guestObject = toObject(guestName, order, tableName)
// 	guestObjects.push(guestObject)
// }

console.log(guestObjects)

// const example = toObject('Lady Gaga', 2, tableName)
// console.log(example)

/**
 * Id   Name                    Grades
213  Marco della Rovere      78
110  Paola Cortellessa       96
250  Andrea Mantegna 	      48
145  Gaia Borromini          74
196  Luigi Grimaldello 	  68
102  Piero della Francesca   50
120  Francesca da Polenta    84
 */

const students = [
	{
		id: 213,
		name: 'Marco della Rovere',
		grades: 78,
	},
	{
		id: 110,
		name: 'Paola Cortellessa',
		grades: 96,
	},
	{
		id: 250,
		name: 'Andrea Mantegna',
		grades: 48,
	},
	{
		id: 145,
		name: 'Gaia Borromini',
		grades: 74,
	},
	{
		id: 196,
		name: 'Luigi Grimaldello',
		grades: 68,
	},
	{
		id: 102,
		name: 'Piero della Francesca',
		grades: 50,
	},
	{
		id: 120,
		name: 'Francesca da Polenta',
		grades: 84,
	},
]

console.log(students)

const formattedStudents = students.map((student) => {
	console.log('map current el: ', student)
	const newStudent = {
		id: student.id,
		name: student.name.toUpperCase(),
		grades: student.grades,
	}

	return newStudent
})

// const formattedStudents = []

// for (let i = 0; i < students.length; i++) {
// 	// const student = students[i]
// 	// student.name = student.name.toUpperCase()

// 	const name = students[i].name
// 	const id = students[i].id
// 	const grades = students[i].grades

// 	const student = {
// 		id: id,
// 		name: name.toUpperCase(),
// 		grades: grades,
// 	}

// 	formattedStudents.push(student)
// }

console.log(formattedStudents)

const topStudents = formattedStudents.filter((student) => student.grades > 70)
const bestStudents = topStudents.filter((student) => student.id > 120)

// const topStudents = []
// const bestStudents = []

// for (let i = 0; i < formattedStudents.length; i++) {
// 	const student = formattedStudents[i]

// 	if (student.grades > 70) {
// 		topStudents.push(student)

// 		if (student.id > 120) {
// 			bestStudents.push(student)
// 		}
// 	}
// }

console.log(topStudents, bestStudents)
