const { createApp } = Vue

createApp({
	data() {
		return {
			newTodoText: '',
			todos: [
				{
					text: 'Fare la spesa',
					done: false,
				},
				{
					text: 'Fare i compiti',
					done: true,
				},
				{
					text: 'Fare la cartella',
					done: false,
				},
			],
		}
	},
	methods: {
		deleteTodo(i) {
			console.log('click su icona')
			// console.log("Sto per eliminare l'elemento " + this.todos[i].text)
			this.todos.splice(i, 1)
		},
		addTodo() {
			console.log('aggiungo la nuova todo')
			// creare nuovo oggetto todo
			// prop text = il valore dell'input (quello che ha scritto l'utente)
			// prop done = false
			const todo = {
				text: this.newTodoText,
				done: false,
			}

			// console.log(todo)
			// pushiamo questo oggeto nell'array todos
			this.todos.push(todo)

			// svuotiamo l'input
			this.newTodoText = ''
		},
		toggleDone(todo) {
			console.log('click su item')
			// todo
			// console.log(todo.text, todo.done)
			// if (todo.done === false) {
			// 	todo.done = true
			// } else {
			// 	todo.done = false
			// }
			todo.done = !todo.done
		},
	},
}).mount('#app')
