<template>
  <li class="card">
    <div class="card-body">
      <!-- <p>{{ item.title ? item.title : item.name }}</p> -->
      <!-- <p>{{ item.title ?? item.name }}</p> -->
      <!-- <p>{{ item.title || item.name }}</p> -->
      <img class="poster" :src="item.posterSrc" alt="">
      <p>{{ item.title }}</p>
      <p>{{ item.original_title }}</p>
      <p v-if="store.flags[item.original_language]">
        <img class="flag" :src="store.flags[item.original_language]" alt="">
      </p>
      <p v-else>Lingua: {{ item.original_language }}</p>
      <!-- <p>{{ item.vote_average }}</p> -->
      <p>{{ item.vote }}</p>
      <p>
        <font-awesome-icon v-for="n in item.vote" :key="n" :icon="['fas', 'star']" />
        <font-awesome-icon v-for="n in 5 - item.vote" :key="n" :icon="['far', 'star']" />
      </p>
    </div>
  </li>
</template>

<script>
  import { store } from '../store.js'
  export default {
    props: {
      item: {
        type: Object,
        required: true
      }
    },
    data() {
      return {
        store,
      }
    }
  }
</script>

<style lang="scss" scoped>
.flag {
  height: 40px;
  width: 40px;
}

.poster {
  width: 100%;
}
</style>