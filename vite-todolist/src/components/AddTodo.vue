<template>

    <input
      @keydown.enter="addTodo"
      v-model.trim="store.inputValue"
      class="add-todo"
      type="text"
      placeholder="Nuova todo..."
    />

</template>

<script>
import { store} from '../store.js'

  export default {
    data() {
      return {
        store
      }
    },
    methods: {
      addTodo() {
        // console.log('keydown')

        if (this.store.inputValue !== '') {
          // aggiunge il value dell'input nell'array
          // console.log(this.inputValue)
          // console.log(this.todos)
          this.store.todos.push({
            text: this.store.inputValue,
            done: false
          })
          // inpostiamo inputValue a stringa vuota
        }

        this.inputValue = ''

        // console.log(this.todos)
      },
    }
  }
</script>

<style lang="scss" scoped>

</style>