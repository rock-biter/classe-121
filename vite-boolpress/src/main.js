import { createApp } from 'vue'
// import router from './router'
import './style.css'
import App from './App.vue'

// views components
import { createRouter, createWebHistory } from 'vue-router'
import AppHome from './pages/AppHome.vue'
import AppAbout from './pages/AppAbout.vue'
import AppBlog from './pages/AppBlog.vue'
import AppPost from './pages/AppPost.vue'

const router = createRouter({
	history: createWebHistory(),
	routes: [
		{ path: '/', name: 'home', component: AppHome },
		{ path: '/blog', name: 'blog', component: AppBlog },
		{ path: '/blog/:slug', name: 'posts.show', component: AppPost },
		{ path: '/about', name: 'about', component: AppAbout },
	],
})

createApp(App).use(router).mount('#app')
