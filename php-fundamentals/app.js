function replace(count) {
	count = 10
	console.log(count) // 10

	return count
}

let count = 0

count = replace(count)

console.log(count) // 10

console.log(`contatatore: ${count} volte.`)

const nomi = ['Mario', 'Mimmo', 'Anita', 'Giuseppina']
console.log(nomi)

const persona = {
	nome: 'Gianni',
	eta: 33,
	altezza: 175,
	padre: {
		nome: 'Michele',
	},
}

console.log(persona.nome) // dot notation => 'Gianni'
console.log(persona['nome']) // brackets notation  => 'Gianni'

const persone = [
	{
		nome: 'Mimmo',
		age: 32,
	},
	{
		nome: 'Mimmo',
		age: 32,
	},
	{
		nome: 'Carlotta',
		age: 32,
	},
]

console.log(persone[2].nome) // carlotta
console.log(persone[2]['nome']) // carlotta

const numeri = [10, 2, 6, 59]

for (let i = 0; i < numeri.length; i++) {
	const num = numeri[i]

	console.log(num)
}

numeri.forEach((value, key) => {
	console.log(value, key)
})
