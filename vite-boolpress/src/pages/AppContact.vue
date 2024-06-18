<template>
  <section>
    <div class="container py-8">
      <h1 class="text-2xl font-bold">Contattami</h1>
    </div>
  </section>
  <section>
    <div class="container">
      <form v-if="success === false" @submit.prevent="sendMessage" action="">
        <div class="mb-3">
          <label class="block mb-1" for="name">Il tuo nome</label>
          <input class="border rounded-lg px-3 border-black block w-full" type="text" id="name" v-model="name" placeholder="Nome">
          <small class="text-red-500 text-sm" v-if="errors.name">{{ errors.name.join(' ')  }}</small>
        </div>
        <div class="mb-3">
          <label class="block mb-1" for="email">La tua mail</label>
          <input class="border rounded-lg px-3 border-black block w-full" type="email" id="email" v-model="email" placeholder="address@gmail.com">
          <small class="text-red-500 text-sm" v-if="errors.email">{{ errors.email.join(' ')  }}</small>
        </div>
        <div class="mb-3">
          <label class="block mb-1" for="message">Il Messaggio</label>
          <textarea class="border rounded-lg px-3 border-black block w-full" id="message" cols="30" rows="10" v-model="message" placeholder="Cosa cerchi?"></textarea>
          <small class="text-red-500 text-sm" v-if="errors.message">{{ errors.message.join(' ')  }}</small>
        </div>
        <div v-if="loading === true">
          <svg class="w-8 h-8 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/></svg>
        </div>
        <button v-else class="bg-amber-400 px-4 leading-[32px] font-bold rounded-lg">Invia</button>
      </form>
      <div v-else class="text-lime-500 text-lg">
        Grazie per avermi contattato, ti risponderò il prima possibile.

      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      name: '',
      email: '',
      message: '',
      errors: {},
      loading: false,
      success: false
    }
  },
  methods: {
    sendMessage() {

      if(this.loading === true) return

      this.errors = {}
      this.loading = true

      const data = {
        name: this.name,
        email: this.email,
        message: this.message
      }

      axios.post('http://127.0.0.1:8000/api/contacts',data)
      .then(res => {

        if(res.data.success === true) {
          // línivo è andato bene
          this.success = true
        } else {
          // gestiamo gli errori
          this.errors = res.data.errors
        }

      })
      .finally(() => {
        this.loading = false
      })

    }
  },
  mounted() {
    console.log('About page mounted')
  },
  unmounted() {
    console.log('About page unmounted')
  },
}
</script>

<style>
</style>