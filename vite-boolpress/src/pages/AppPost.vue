<template>
  <div class="container py-10">
    <button @click="goBack">
      Indietro
    </button>
    <!-- <h1 class="text-xl text-amber-400">Pagine di dettaglio del post</h1>
    <p>{{ $route.params.slug }}</p>
    <p>Porp SLug: {{ slug }}</p> -->
  </div>

  <template v-if="post">
    <div class="container">
      <h1 class="text-2xl font-bold">{{ post.title }}</h1>
      <p class="font-medium">{{ post.user.name }}</p>
      <TagsPills :tags="post.tags" />
      <p>
        {{ post.category ? post.category.name : 'Nessuna categoria'}}
      </p>
    </div>
    <div class="container py-6" v-html="post.content"></div>
    <div class="container">
      <p>{{ post.created_at }}</p>
    </div>
  </template>
  
</template>

<script>
import axios from 'axios'
import TagsPills from '../components/TagsPills.vue'

export default {
  components: {
    TagsPills
  },
  props: {
    slug: {
      type: String,
      required: true
    }
  },
  data() {
    return {
      post: null,
    }
  },
  methods: {
    goBack() {
      this.$router.back()
    },
    fetchPost() {

      axios.get(`http://127.0.0.1:8000/api/posts/${this.slug}`)
      .then((res) => {
        // console.log(res.data.post)
        this.post = res.data.post
      })
      .catch((err) => {
        this.$router.push({
          name: 'not-found',
          params: { pathMatch: this.$route.path.substring(1).split('/') },
        })
      })

    }
  },
  created() {
    this.fetchPost()
  },
  mounted() {
    // console.log(this.$router)
    // console.log('slug',this.slug)
    // // console.log(this.$route)
    // console.log(this.$route.params.slug)
    // console.log('page post mounted')
  },
  unmounted() {
    console.log('page post unmounted')
  }
}
</script>