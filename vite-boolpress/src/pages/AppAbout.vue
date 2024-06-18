<template>
  <BaseLayout>
    <section class="py-10">
      <div class="container">
        <h1>Chi sono</h1>
    <p>Ciao sono un creative developer</p>
      </div>

    </section>
  </BaseLayout>
</template>

<script>
import BaseLayout from '../layouts/BaseLayout.vue'
export default {
  components: {
    BaseLayout
  },
  mounted() {
    console.log('About page mounted')
  },
  unmounted() {
    console.log('About page unmounted')
  },
}
</script>

<style>
</style>