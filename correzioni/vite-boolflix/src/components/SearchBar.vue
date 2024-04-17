<template>
  <header>
    <div class="container">
      <input type="text" v-model="query" placeholder="Cerca ...">
      <button @click="fetchData">Cerca</button>
    </div>

  </header>
</template>

<script>
  import axios from 'axios'
  import { store } from '../store.js'

  export default {
    data() {
      return {
        query: ''
      }
    },
    methods: {
      fetchData() {
        console.log(this.query)
        console.log('recupero i dati di film')
        axios.get('https://api.themoviedb.org/3/search/movie',{
          params: {
            api_key: 'e99307154c6dfb0b4750f6603256716d',
            query: this.query
          }
        }).then((res) => {
          console.log(res.data.results)
          store.movies = res.data.results
        })

        console.log('recupero i dati di serie tv')
      }
    },
  }
</script>

<style lang="scss" scoped>

</style>