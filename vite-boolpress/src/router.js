import { createRouter, createWebHistory } from 'vue-router'
import AppHome from './pages/AppHome.vue'
import AppAbout from './pages/AppAbout.vue'
import AppBlog from './pages/AppBlog.vue'
import AppPost from './pages/AppPost.vue'
import AppContact from './pages/AppContact.vue'

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
		{ path: '/contact', name: 'contact', component: AppContact },
	],
})

export default router
