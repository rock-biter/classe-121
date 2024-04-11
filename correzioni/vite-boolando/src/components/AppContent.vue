<template>
  <main class="page-content">
			<section class="section products">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4">
							<div class="card product">
								<div class="card__header">
									<img class="product__thumb" src="/1.webp" alt="" />
									<img
										class="product__thumb thumb--hover"
										src="/1b.webp"
										alt=""
									/>
									<span class="btn-heart">&hearts;</span>
									<ul class="badges">
										<li class="badge badge--discount">-50%</li>
										<li class="badge badge--sostenibility">Sostenibilità</li>
									</ul>
								</div>
								<div class="card__body">
									<strong class="product__brand">Levi's</strong>
									<h3 class="product__title">Relaxed fit tee unisex</h3>
									<div class="product__price">
										<span>14,99 &euro;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="card product">
								<div class="card__header">
									<img class="product__thumb" src="/1.webp" alt="" />
									<span class="btn-heart">&hearts;</span>
									<ul class="badges">
										<li class="badge badge--discount">-50%</li>
									</ul>
								</div>
								<div class="card__body">
									<strong class="product__brand">Levi's</strong>
									<h3 class="product__title">Relaxed fit tee unisex</h3>
									<div class="product__price">
										<span>14,99 &euro;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="card product">
								<div class="card__header">
									<img class="product__thumb" src="/1.webp" alt="" />
									<ul class="badges">
										<li class="badge badge--sostenibility">Sostenibilità</li>
									</ul>
								</div>
								<div class="card__body">
									<strong class="product__brand">Levi's</strong>
									<h3 class="product__title">Relaxed fit tee unisex</h3>
									<div class="product__price">
										<span>14,99 &euro;</span>
										<del>29,99 &euro;</del>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="card product">
								<div class="card__header">
									<img class="product__thumb" src="/1.webp" alt="" />
								</div>
								<div class="card__body">
									<strong class="product__brand">Levi's</strong>
									<h3 class="product__title">Relaxed fit tee unisex</h3>
									<div class="product__price">
										<span>14,99 &euro;</span>
										<span>29,99 &euro;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="card product">
								<div class="card__header">
									<img class="product__thumb" src="/1.webp" alt="" />
								</div>
								<div class="card__body">
									<strong class="product__brand">Levi's</strong>
									<h3 class="product__title">Relaxed fit tee unisex</h3>
									<div class="product__price">
										<span>14,99 &euro;</span>
										<span>29,99 &euro;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="card product">
								<div class="card__header">
									<img class="product__thumb" src="/1.webp" alt="" />
								</div>
								<div class="card__body">
									<strong class="product__brand">Levi's</strong>
									<h3 class="product__title">Relaxed fit tee unisex</h3>
									<div class="product__price">
										<span>14,99 &euro;</span>
										<span>29,99 &euro;</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>

.products {
	padding: 100px 0;
}

.products .row {
	row-gap: 20px;
}

/* CARD PRODUCT */
.card {
	/* background-color: #fe6900; */
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

.badge {
	color: white;
	background-color: black;
	font-size: 12px;
	line-height: 30px;
	padding: 0 12px;
	font-weight: bold;
}

.badge.badge--discount {
	background-color: red;
}

.badge.badge--sostenibility {
	background-color: green;
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