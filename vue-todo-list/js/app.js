const { createApp } = Vue

createApp({
	data() {
		return {
			todos: [
				'Fare i compiti',
				'Fare la cartella',
				'Riordinare la camera',
				'Dare un bacino alla Mamma',
			],
			inputValue: '',
			cose: [
				{
					text: 'Fare i compito',
					done: true,
				},
				{
					text: 'Fare i la spesa',
					done: false,
				},
				{
					text: 'Fare i compito',
					done: false,
				},
			],
		}
	},
	methods: {
		addTodo() {
			// console.log('keydown')

			if (this.inputValue !== '') {
				// aggiunge il value dell'input nell'array
				// console.log(this.inputValue)
				// console.log(this.todos)
				this.todos.push(this.inputValue)
				// inpostiamo inputValue a stringa vuota
			}

			this.inputValue = ''

			console.log(this.todos)
		},
		deleteTodo(i) {
			console.log(i)
			console.log('delete todo', this.todos[i])
			this.todos.splice(i, 1)
		},
	},
}).mount('#app')

// const tasks = [
// 	'Fare i compiti',
// 	'Fare la cartella',
// 	'Riordinare la camera',
// 	'Dare un bacino alla Mamma',
// ]

// console.log(tasks)

// tasks.splice(2, 1)

// console.log(tasks)
