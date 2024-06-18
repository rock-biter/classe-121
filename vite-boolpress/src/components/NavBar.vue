<template>
  <header class="py-2 bg-gray-100">
    <div class="container">
      <div class="flex justify-between items-center">

        <RouterLink class="text-lg font-extrabold" to="/">Gianluca Lomarco</RouterLink>

        <nav class="flex gap-3 items-center">
          <RouterLink v-for="link in menu" :key="menu.routeName" :class="$route.name === link.routeName ? 'text-amber-400' : ''" :to="{ name: link.routeName }">{{  link.text  }}</RouterLink>
          <!-- <RouterLink :class="$route.fullPath === '/blog' ? 'text-amber-400' : ''" :to="{ name: 'blog'}">Blog</RouterLink>
          <RouterLink :class="$route.fullPath === '/about' ? 'text-amber-400' : ''" :to="{ name: 'about'}">About</RouterLink> -->
        </nav>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      menu: [
        {
          routeName: 'home',
          text: 'Home'
        },
        {
          routeName: 'blog',
          text: 'Blog'
        },
        {
          routeName: 'about',
          text: 'About'
        },
        {
          routeName: 'contact',
          text: 'Contact Us'
        }
      ]
    }
  },
}
</script>