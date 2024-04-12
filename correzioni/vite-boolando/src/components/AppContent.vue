<template>
  <main class="page-content">
		<section class="section products">
			<div class="container">
				<div class="row">
					<div v-for="element in products" :key="element.id" class="col-12 col-md-6 col-lg-4">
						<ProductCard :product="element" />
					</div>
				</div>
			</div>
		</section>
	</main>
</template>

<script>
	import ProductCard from './ProductCard.vue';
	import data from '../assets/db.json';

  export default {
		components: {
			ProductCard
		},
    data() {
			return {
				products: data.products
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