console.log('OOP')

class Product {
	id = null
	name = ''
	price = 0
	brand = ''
	description = ''

	constructor(name, price, brand) {
		this.name = name
		this.price = price
		this.brand = brand
	}
}

const pantaloni = new Product('Pantoloni di Lino', 65, 'Lazzari')
// pantaloni.name = 'Pantaloni di Lino'
// pantaloni.id = 36
// pantaloni.price = 65
// pantaloni.description = 'Bellissimi e freschissimi pantaloni'
// pantaloni.brand = 'Lazzari'

const monitor = new Product('Monitor OLED', 789, 'LG')
monitor.id = 12

const scarpe = new Product('AirMAx', 230, 'Nike')

console.log(monitor, scarpe, pantaloni)

class Cart {
	products = []

	add(product) {
		if (product instanceof Product) {
			this.products.push(product)
		} else {
			console.error('Product non è un istanza della classe Procuct')
		}
	}

	remove(product) {
		const i = this.products.indexOf(product)
		if (i >= 0) {
			this.products.splice(i, 1)
		}
	}

	getTotalCost() {
		let sum = 0

		this.products.forEach((prod) => {
			sum += prod.price
		})

		return sum
	}
}

const cart = new Cart()

cart.add(monitor)
cart.add(monitor)
cart.add(scarpe)

console.log(cart.getTotalCost())

// cart.add(5)

console.log(cart)

cart.remove(monitor)

console.log(cart, cart.getTotalCost())

// carrello.add(monitor,scarpe)

// carrello.remove(monitor,1)

// const costo = carrello.getTotalCost()

// function creaPersona(name, age) {
// 	return { name, age }
// }

// const persona = creaPersona('Maria', 32)
// console.log(persona)

// console.log(document.querySelectorAll('.title'))

// class Quadrato {
// 	lato

// 	constructor(lato) {
// 		this.lato = lato
// 	}

// 	perimetro() {
// 		return this.lato * 4
// 	}

// 	area() {
// 		return this.lato ** 2
// 	}

// 	scale(scalar) {
// 		this.lato *= scalar
// 	}
// }

// const q = new Quadrato(10)
// // q.lato = 10

// q.scale(3)
// console.log(q.perimetro(), q.area())

// const quadratoPiccolo = new Quadrato(1)
// // quadratoPiccolo.lato = 1
// console.log(quadratoPiccolo.perimetro(), quadratoPiccolo.area())

// const quad = new Quadrato(5)
// console.log(quad)

// const nuovoQ = {
//   lato: 23,
//   perimetro() {
// 		return this.lato * 4
// 	},
// 	area() {
// 		return this.lato ** 2
// 	},
// 	scale(scalar) {
// 		this.lato *= scalar
// 	}
// }

// const num = [1, 2, 3, 6, 5]
// const numeri = new Array(10).fill(0)
// console.log(num, numeri)

// const numero = 3
// const number = new Number(3)
// console.log(number, numero)

// const bool = true
// const boolean = new Boolean(1)
// console.log(bool, boolean)
