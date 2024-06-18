<template>
  <BlankLayout>
    <div class="py-10">
      <h1 class="text-[200px]">404</h1>
      <p>Pagina non trovata</p>
      <router-link to="/">Torna alla home</router-link>
    </div>
  </BlankLayout>
</template>

<script>
import BlankLayout from '../layouts/BlankLayout.vue';
export default {
  components: {
    BlankLayout
  },
  mounted() {
    console.log('404 page mounted')
  },
  unmounted() {
    console.log('404 page unmounted')
  },
}
</script>

<style>
</style>