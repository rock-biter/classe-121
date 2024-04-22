import { reactive } from 'vue'

export const store = reactive({
	movies: [],
	tvs: [],
	flags: {
		it: '/img/flag_it.png',
		en: '/img/flag_en.png',
	},
})
