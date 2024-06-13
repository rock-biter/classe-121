<template>
  <header class="py-2 bg-gray-100">
    <div class="container">
      <div class="flex justify-between items-center">

        <RouterLink class="text-lg font-extrabold" to="/">Gianluca Lomarco</RouterLink>

        <nav class="flex gap-3 items-center">
          <RouterLink :class="$route.fullPath === '/' ? 'text-amber-400' : ''" :to="{ name: 'home' }">Home</RouterLink>
          <RouterLink :class="$route.fullPath === '/blog' ? 'text-amber-400' : ''" :to="{ name: 'blog'}">Blog</RouterLink>
          <RouterLink :class="$route.fullPath === '/about' ? 'text-amber-400' : ''" :to="{ name: 'about'}">About</RouterLink>
        </nav>
      </div>
    </div>
  </header>
</template>