<template>
  <div class="container py-10">
    <button @click="goBack">
      Indietro
    </button>
    <h1 class="text-xl text-amber-400">Pagine di dettaglio del post</h1>
    <p>{{ $route.params.slug }}</p>
  </div>
</template>

<script>
export default {
  methods: {
    goBack() {
      this.$router.back()
    }
  },
  mounted() {
    console.log(this.$router)
    console.log(this.$route)
    console.log(this.$route.params.slug)
    console.log('page post mounted')
  },
  unmounted() {
    console.log('page post unmounted')
  }
}
</script>