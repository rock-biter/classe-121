<template>
  <ul class="flex flex-wrap gap-2 mt-2">
    <li class="rounded-full bg-gray-200 px-3 leading-6" v-for="tag in tags" :key="tag.id">
      {{ tag.name }}
    </li>
  </ul>
</template>

<script>
export default {
  props: {
    tags: {
      type: Array,
      required: true
    }
  }
}
</script>