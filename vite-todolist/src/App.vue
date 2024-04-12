<template>
  <AppHeader />
  <AppContent />
</template>

<script>
  import AppHeader from './components/AppHeader.vue'
  import AppContent from './components/AppContent.vue'
  import axios from 'axios'
  import { store } from './store.js'

  export default {
    components: {
      AppHeader: AppHeader,
      AppContent
    },
    data: function() {
      return {
        store: store
      }
    },
    methods: {
      fetchTodos() {
        axios.get('http://localhost:3000/todos').then((res) => {
          console.log(res)
          console.log(res.data)
          this.store.todos = res.data
        })
      }
    },
    created: function() {
      this.fetchTodos()
    }
    
  }
</script>

<style lang="scss">
@use './style/general';

</style>