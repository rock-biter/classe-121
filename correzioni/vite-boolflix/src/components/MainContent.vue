<template>
  <main>
    <section>
      <div class="container">
        <h2>Movies</h2>
      </div>
      <div class="container">
        <ul v-if="store.movies.length !== 0">
          <Card v-for="movie in store.movies" :key="movie.id" :item="movie" />
        </ul>
        <p v-else>Nessun film</p>
      </div>
    </section>
  </main>
</template>

<script>
  import { store } from '../store.js'
  import Card from './Card.vue'

  export default {
    components: {
      Card
    },
    data() {
      return {
        store: store
      }
    },
  }
</script>

<style lang="scss" scoped>

</style>