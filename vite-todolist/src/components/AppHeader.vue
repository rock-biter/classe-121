<template>
  <header class="main-header">
    <nav>
      <div class="logo">TODOS</div>
      <AddTodo />
    </nav>
  </header>
</template>

<script>
import AddTodo from './AddTodo.vue'
  export default {
    components: {
      AddTodo
    }
    
  }
</script>

<style lang="scss" scoped>

</style>