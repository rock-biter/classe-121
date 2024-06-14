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
import AppNotFound from './pages/AppNotFound.vue'

const router = createRouter({
	history: createWebHistory(),
	routes: [
		{ path: '/', name: 'home', component: AppHome },
		{ path: '/blog', name: 'blog', component: AppBlog },
		{
			path: '/blog/:slug',
			name: 'posts.show',
			component: AppPost,
			props: true,
		},
		{ path: '/about', name: 'about', component: AppAbout },
		{ path: '/:pathMatch(.*)*', name: 'not-found', component: AppNotFound },
	],
})

createApp(App).use(router).mount('#app')
