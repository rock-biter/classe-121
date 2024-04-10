<script>
// primo passaggio imporare il componente
import HeroSection from './components/HeroSection.vue'

export default {
  // secondo passaggio registrare il componente
  components: {
    HeroSection
  },
  data() {
    return {
      message: 'Hello world!'
    }
  }
}
</script>

<template>
  <section>
    <div class="container">
      <h1 class="title">
        {{  message }}
      </h1>

    </div>
  </section>
  <!-- Utilizzare il componente nel template -->
  <HeroSection />
</template>

<!-- qui non ci deve essere l'attributo scoped -->
<style lang="scss">
// ultimo passaggio importaimo il file general coin gli stili globali
@use './style/general';

</style>

