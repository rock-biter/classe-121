<template>
  <main>
    <section>
      <div class="container">
        <h2>Movies</h2>
      </div>
      <div class="container">
        <ul class="grid" v-if="store.movies.length !== 0">
          <Card v-for="movie in store.movies" :key="movie.id" :item="movie" />
        </ul>
        <p v-else>Nessun film</p>
      </div>
    </section>
    <section>
      <div class="container">
        <h2>Tvs</h2>
      </div>
      <div class="container">
        <ul class="grid" v-if="store.tvs.length !== 0">
          <Card v-for="tv in store.tvs" :key="tv.id" :item="tv" />
        </ul>
        <p v-else>Nessuna serie TV</p>
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
.grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
}
</style>