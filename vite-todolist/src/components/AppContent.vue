<template>
  <main>
    <section class="container todo-section">
      <div class="card">
        <div class="card-header">
          
        </div>
        <div class="card-body">
          <ul v-if="store.todos.length !== 0" class="todo-list">
            <TodoItem v-for="(todo,i) in store.todos" @click="toggleDone(todo)" :item="todo" :key="i" @onDelete="deleteTodo(i)"
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
          <p>{{ store.inputValue }}</p>
        </div>
      </div>
    </section>
  </main>
</template>

<script>
import TodoItem from './TodoItem.vue'
// import AddTodo from './AddTodo.vue'
import { store } from '../store.js'

// console.log(dataProducts)

  export default {
    components: {
      TodoItem,
      // AddTodo
    },
    data() {
      return {
        store: store
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
      deleteTodo(i) {
        // console.log(i)
        console.log('delete todo', this.store.todos[i])
        this.store.todos.splice(i, 1)
      },
      toggleDone(todo) {
        // console.log('click su item')
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