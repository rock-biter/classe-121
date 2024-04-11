<template>
  <li :class="item.done === true ? 'todo-item--done' : ''" class="todo-item">
    {{ item.text }}: {{ text }}
    <span>X</span>
  </li>
</template>

<script>
  export default {
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