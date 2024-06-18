<template>
  <NavBar />
  <main>
    <slot></slot>
  </main>
  <footer class="bg-black text-white py-10">
    <div class="container">
      &copy; Copyright Gianluca Lomarco
    </div>
  </footer>
</template>

<script>
import NavBar from '../components/NavBar.vue'

export default {
  components: {
    NavBar
  },
}
</script>

<style>

</style>