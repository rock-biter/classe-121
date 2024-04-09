<script>
export default {
  data() {
    return {
      message: 'Ciao mondo'
    }
  },
  methods: {
    sayHello() {
      console.log('Hello')
    }
  },
  mounted() {
    console.log('mounted')
  }
}
</script>

<template>
  <div>
    <h1 class="title">
      {{ message }}

    </h1>
    <!-- <button @click="sayHello">
      Saluta
    </button> -->
  </div>
</template>

<style>
.title {
  font-size: 48px;
  margin-bottom: 20px;
}
</style>