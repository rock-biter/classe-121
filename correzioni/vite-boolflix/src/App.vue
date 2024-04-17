<template>
  <SearchBar />
  <MainContent />
</template>

<script>
import MainContent from './components/MainContent.vue'
import SearchBar from './components/SearchBar.vue'
  
  export default {
    components: {
      MainContent,
      SearchBar,
    }
    
  }
</script>

<style lang="scss">
@use './style/general';

</style>