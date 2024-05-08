const { createApp } = Vue

createApp({
	data() {
		return {
			message: 'Hello Vue!',
			newTodo: '',
			todos: [],
		}
	},
	methods: {
		fetchData() {
			// axios recuperiamo i dati
			axios.get('./server.php').then((res) => {
				// console.log(res.data)
				this.todos = res.data.results
			})
		},
		addTodo() {
			if (this.newTodo !== '') {
				// const newTodo = {
				// 	text: this.newTodo,
				// 	done: false,
				// }

				const data = {
					todo: this.newTodo,
					// done: false
				}

				axios
					.post('./add-todo.php', data, {
						headers: {
							'Content-type': 'multipart/form-data',
						},
					})
					.then((res) => {
						// mostreremo il nuovo todo nel client
						if (res.data.success === true) {
							this.todos.push(res.data.todo)
							this.newTodo = ''
						}
					})
					.catch((err) => {
						// gestire eventuali errori del server
						console.log(err)
					})

				// this.todos.push(newTodo)
				// this.newTodo = ''
			}
		},
	},
	created() {
		this.fetchData()
	},
}).mount('#app')
