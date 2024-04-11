<template>
  <main>
    <section class="container todo-section">
      <div class="card">
        <div class="card-header">
          <input
            @keydown.enter="addTodo"
            v-model.trim="inputValue"
            class="add-todo"
            type="text"
            placeholder="Nuova todo..."
          />
        </div>
        <div class="card-body">
          <ul v-if="todos.length !== 0" class="todo-list">
            <TodoItem v-for="(todo,i) in todos" @click="toggleDone(todo)" :item="todo" :key="i" 
             />
            <!-- <TodoItem :todoText="'Fare la pizza'" :done="true" />
            <TodoItem todoText="Andare in banca" />
            <TodoItem todoText="Lavare la macchina" />
            <TodoItem :todoText="stringaTodo" :done="true" /> -->
            <!-- <li
              @click="deleteTodo(i)"
              v-for="(todo,i) in todos"
              class="todo-item"
              :key="i"
            >
              {{ todo }}
            </li> -->
          </ul>
          <p v-else>Non ci sono cose da fare...</p>
        </div>
      </div>
    </section>
  </main>
</template>

<script>
import TodoItem from './TodoItem.vue'
import dataProducts from '../assets/db.json'

// console.log(dataProducts)

  export default {
    components: {
      TodoItem
    },
    data() {
      return {
        products: dataProducts.products,
        inputValue: '',
        stringaTodo: 'Fare la spesa',
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
        // todos: [
        //   'Fare i compiti',
        //   'Fare la cartella',
        //   'Riordinare la camera',
        //   'Dare un bacino alla Mamma',
        //   'Andare in banca',
        //   'Fare la spesa',
        //   'Lavare la macchina'
        // ],
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
    }
  }
</script>

<style lang="scss" scoped>

</style>