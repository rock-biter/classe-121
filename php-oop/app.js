class Persona {
	nome
	cognome
	eta

	constructor(nome, cognome, eta) {
		this.nome = nome
		this.cognome = cognome
		this.eta = eta
	}

	setNome(nome) {
		this.nome = nome
	}

	getNome() {
		return this.nome
	}
}

const giangi = new Persona('Giangi', 'Lomarco', 33)

console.log(giangi.address?.street)
// giangi.nome = 'Giangi'
// giangi.setNome('Giangi')
// giangi.eta = 33

console.log(giangi)

const giovanni = new Persona()
giovanni.nome = 'Giovanni'

console.log(giovanni)
