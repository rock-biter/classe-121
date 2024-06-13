<template>
  <!-- <h1>Hello App!</h1>
  <p>
    <strong>Current route path:</strong> {{ $route.fullPath }}
  </p> -->
  <NavBar />
  <main>
    <RouterView />
  </main>
</template>

<script>
import AppMain from './components/AppMain.vue'
import NavBar from './components/NavBar.vue'

export default {
  components: {
    AppMain,
    NavBar
  },
  data() {
    return {
      message: 'Ciao mondo'
    }
  }
}
</script>

<style>

</style>