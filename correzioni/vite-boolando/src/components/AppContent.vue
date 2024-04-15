<template>
  <main class="page-content">
		<section class="section products">
			<div class="container">
				<div class="row">
					<div v-for="element in store.products" :key="element.id" class="col-12 col-md-6 col-lg-4">
						<ProductCard :product="element" />
					</div>
				</div>
			</div>
		</section>
	</main>
</template>

<script>
	import ProductCard from './ProductCard.vue';
	import { store } from '../store.js';

	console.log(store)

  export default {
		components: {
			ProductCard
		},
    data() {
			return {
				store: store,
			}
		},
  }
</script>

<style lang="scss" scoped>

.products {
	padding: 100px 0;
}

.products .row {
	row-gap: 20px;
}
</style>