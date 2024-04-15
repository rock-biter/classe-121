<template>
  <li :class="item.done === true ? 'todo-item--done' : ''" class="todo-item">
    {{ item.text }}
    <!-- <span @click.stop="$emit('onDelete')">X</span> -->
    <span @click.stop="confirm">X</span>
  </li>
  <ModalConfirm :open="isOpen" @denied="isOpen = false" @allowed="deleteTodo" />
</template>

<script>
import { store } from '../store.js'
import ModalConfirm from './ModalConfirm.vue'

  export default {
    components: {
      ModalConfirm
    },
    // props: ['todoText', 'done'],// definizione delle props del componente
    // props: ['item'],
    props: {
      // item: Object,
      item: {
        type: Object,
        required: true
      },
      // done: Boolean,
      text: {
        type: String,
        default: 'pending'
      },
      // likes: Array
    },
    data() {
      return {
        isOpen: false
      }
    },
    methods: {
      confirm() {
        this.isOpen = true
      },
      deleteTodo() {
        console.log('Eliminare todo: ' + this.item.text)
        // creare ed emettere un evento custom (che il padre potrà ascoltare)
        // qui dobbiamo usare il this (il nome dell'evento è a scelta)
        
        this.isOpen = false
        this.$emit('onDelete')

        // IN ALTERNATIVA: dobbiamo trovare qual è l'indice di this.item dentro this.store.todos
        // console.log(store, this.item)
        // const i = store.todos.indexOf(this.item)
        // // console.log(i)
        // if(i > -1) {
        //   store.todos.splice(i, 1)
        // }
        
      }
    },
    mounted() {
      console.log(this.item)
      // this.item = {} // errore le props sono solo readonly
    },
    updated() {
      console.log('todo updated',this.item.done)
    }
  }
  // function todo(text) {
  //   console.log(text)
  // }
</script>

<style lang="scss" scoped>
.todo-item {
  line-height: 40px;
  padding: 0 24px;
  margin: 0 -24px;
  font-size: 20px;
  border-top: 1px solid #c8c8c8;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.todo-item.todo-item--done {
  text-decoration: line-through;
}

.todo-item:first-child {
  border-top: none;
}

.todo-item:hover {
  background-color: #eaeaea;
}

</style>