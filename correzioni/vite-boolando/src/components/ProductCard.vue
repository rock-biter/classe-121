<template>
  <div class="card product" :class="{
    favorite: product.isInFavorites
  }">
    <div class="card__header">
      <img class="product__thumb" :src="getStaticPath(product.frontImage)" alt="" />
      <img
        class="product__thumb thumb--hover"
        :src="`/${product.backImage}`"
        alt=""
      />
      <span class="btn-heart">&hearts;</span>
      <ul class="badges">
        <Badge v-for="(badge,i) in badges" :key="i" :text="badge.value" :type="badge.type" />
        <!-- <li class="badge badge--discount">-50%</li>
        <li class="badge badge--tag">Sostenibilità</li> -->
      </ul>
    </div>
    <div class="card__body">
      <strong class="product__brand">{{ product.brand }}</strong>
      <h3 class="product__title">{{ product.name }}</h3>
      <div class="product__price">
        <span>{{ product.price  }} &euro;</span>
      </div>
    </div>
  </div>
</template>

<script>
import Badge from './Badge.vue';
  
  export default {
    props: ['product'],
    components: {
      Badge
    },
    computed: {
      badges() {
        return this.product.badges
      }
    },
    methods: {
      getStaticPath(fileName) {
				return '/'+fileName;
			}
    },
  }
</script>

<style lang="scss" scoped>
/* CARD PRODUCT */

.product.favorite .btn-heart{
  color: red;
}

.card__header img {
	display: block;
}

.card.product .card__header {
	position: relative;
}

.btn-heart {
	width: 40px;
	height: 40px;
	background-color: white;
	font-size: 22px;
	position: absolute;
	top: 20px;
	right: 0;
	display: flex;
	justify-content: center;
	align-items: center;
}

.badges {
	display: flex;
	flex-wrap: wrap;
	gap: 8px;
	position: absolute;
	left: 0;
	bottom: 20px;
}

.card__header .product__thumb.thumb--hover {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	transition: opacity 300ms ease-in-out;
}

.card__header .product__thumb {
	/* height: 150px; */
	aspect-ratio: 1/1;
	width: 100%;
	object-fit: cover;
	object-position: center center;
}

.card:hover .product__thumb.thumb--hover {
	opacity: 1;
}

.product__price :first-child {
	color: red;
	font-weight: 700;
}

.product__price :nth-child(2) {
	color: #555;
}
</style>