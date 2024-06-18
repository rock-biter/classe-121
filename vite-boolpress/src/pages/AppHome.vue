<template>
  <BaseLayout>
    <section class="bg-amber-400">
      <div class="container min-h-[640px] flex items-center ">
        <div>
          <h1 class="text-[50px] font-black">Gianluca Lomarco</h1>
          <h2 class="text-2xl font-bold mt-2">Creative Developer</h2>
          <div class="flex gap-6 mt-6">
            <BentoBox v-for="tech in tecnologies" :key="tech" class="p-2">
            {{ tech }}
            </BentoBox>
          </div>
        </div>
      </div>
    </section>
    <section class="py-10">
      <div class="container">
        <h2 class="text-xl">Reference</h2>
      </div>
    </section>
  </BaseLayout>
  
</template>

<script>
import BentoBox from '../components/BentoBox.vue'
import BaseLayout from '../layouts/BaseLayout.vue'

export default {
  components: {
    BentoBox,
    BaseLayout
  },
  data() {
    return {
      tecnologies: [
        'css', 'javascript','webGL','webGPU', 'three.js'
      ]
    }
  },
  mounted() {
    console.log('Home page mounted')
  },
  unmounted() {
    console.log('Home page unmounted')
  },
}
</script>

<style>
</style>