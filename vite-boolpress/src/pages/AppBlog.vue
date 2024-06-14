<template>
  <div class="container">
    <h2 class="text-2xl my-8">Ecco i nostri post</h2>
    <ul class="grid grid-cols-3 gap-4">
      <li class="border p-4 shadow-lg rounded-lg" v-for="post in posts" :key="post.id">
        <h2 class="text-lg text-amber-400 font-medium">{{ post.title }}</h2>
        <p class="text-sm">{{  post.user.name }}</p>
        <p v-if="post.category" class="text-gray-600">
          {{ post.category.name }}
        </p>
        <TagsPills :tags="post.tags" />
        <router-link :to="{ name: 'posts.show', params: { slug: post.slug } }" >Read more...</router-link>
      </li>
    </ul>
    <div v-if="lastPage > 1">
      <ul class="flex gap-3 justify-center my-8">
        <li :class="n === currentPage ? 'bg-amber-400' : 'bg-gray-100'" class="cursor-pointer aspect-square w-8 flex justify-center items-center rounded-full " @click="changePage(n)" v-for="n in lastPage" :key="n">
          {{ n }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import TagsPills from '../components/TagsPills.vue'

export default {
  components: {
    TagsPills
  },
  data() {
    return {
      posts: [],
      currentPage: 1,
      lastPage: null
    }
  },
  methods: {
    changePage(n) {
      if(n === this.currentPage) return
      this.currentPage = n
      this.fetchPosts()
    },
    fetchPosts() {

      axios.get('http://127.0.0.1:8000/api/posts',{
        params: {
          page: this.currentPage,
          // perPage: 9
        }
      })
      .then((res) => {
        // console.log(res.data.posts) // senza la paginazione
        console.log(res.data.results.data)
        this.posts = res.data.results.data
        this.lastPage = res.data.results.last_page
      })

    }
  },
  created() {
    this.fetchPosts()
  },
}
</script>

<style>

</style>