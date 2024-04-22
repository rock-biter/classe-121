<template>
  <header>
    <div class="container">
      <!-- <font-awesome-icon :icon="['fas', 'user']" /> -->
      <input type="text" v-model="query" @keyup.enter="fetchData" placeholder="Cerca ...">
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
        // console.log(this.query)
        // console.log('recupero i dati di film')
        axios.get('https://api.themoviedb.org/3/search/movie',{
          params: {
            api_key: 'e99307154c6dfb0b4750f6603256716d',
            query: this.query
          }
        }).then((res) => {
          // console.log(res.data.results)
          store.movies = res.data.results.map((el) => {
            el.vote = Math.floor(el.vote_average / 2)
            if(el.poster_path) {
              el.posterSrc = `https://image.tmdb.org/t/p/w342${el.poster_path}`
            } else {
              el.posterSrc = `https://image.tmdb.org/t/p/w342/wwemzKWzjKYJFfCeiB57q3r4Bcm.png`
            }
            return el
          })
        })

        // console.log('recupero i dati di serie tv')
        axios.get('https://api.themoviedb.org/3/search/tv',{
          params: {
            api_key: 'e99307154c6dfb0b4750f6603256716d',
            query: this.query
          }
        }).then((res) => {
          // console.log('tvs',res.data.results)
          store.tvs = res.data.results.map((el) => {
            el.title = el.name
            el.original_title = el.original_name
            el.vote = Math.floor(el.vote_average / 2)
            if(el.poster_path) {
              el.posterSrc = `https://image.tmdb.org/t/p/w342${el.poster_path}`
            } else {
              el.posterSrc = `https://image.tmdb.org/t/p/w342/wwemzKWzjKYJFfCeiB57q3r4Bcm.png`
            }
            return el
          })

          console.log(store.tvs)
        })
      }
    },
  }
</script>

<style lang="scss" scoped>

</style>