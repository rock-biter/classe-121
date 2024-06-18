<template>
  <RouterView />
</template>

<script>
import NavBar from './components/NavBar.vue'

export default {
  components: {
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