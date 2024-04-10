<script>
export default {
  data() {
    return {
      src: 'vite.svg'
    }
  }
}
</script>

<template>
  <section class="hero">
    <div class="container">
      <div class="card">
        <h1>Ciao Mondo</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, nobis.</p>
        <img src="/vite.svg" alt="">
        <img src="../assets/vue.svg" alt="">
        <img :src="`../assets/${src}`" alt="">
        <img :src="`/${src}`" alt="">
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@use '../style/partials/mixins' as *;

.hero {
  min-height: 100vh;
  background-color: coral;
  color: white;
  display: flex;
  align-items: center;
  padding: 80px 20px;
}
/*
.container {
  max-width: 900px;
  margin: 0 auto;
}
*/
.card {
  @include card-mixin;
  color: black;
  padding: 20px;

  h1 {
    color: mediumpurple;
  }
}


</style>