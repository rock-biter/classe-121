<template>
  <div class="border h-full  shadow-lg rounded-lg">
    <!-- <img v-if="post.cover_image" :src="`http://127.0.0.1:8000/storage/${post.cover_image}`" alt=""> -->
    <img v-if="post.cover_image" :src="post.cover_fullpath" alt="">
    <div class="p-4">
      <h2 class="text-lg text-amber-400 font-medium">{{ post.title }}</h2>
      <p>Created at: {{ post.created_at  }}</p>
      <p class="text-sm">{{  post.user.name }}</p>
      <p v-if="post.category" class="text-gray-600">
        {{ post.category.name }}
      </p>
      <TagsPills :tags="post.tags" />
      <router-link :to="{ name: 'posts.show', params: { slug: post.slug } }" >Read more...</router-link>
    </div>
    
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true
    }
  },
  mounted() {
    console.log(this.post)
  },
}
</script>