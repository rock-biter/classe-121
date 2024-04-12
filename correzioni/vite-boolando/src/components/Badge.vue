<template>
  <li :class="`badge--${type}`" class="badge">{{ text }}</li>
</template>

<script>
  export default {
    props: ['type','text']    
  }
</script>

<style lang="scss" scoped>
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
	order: -1000;
}

.badge.badge--tag {
	background-color: green;
}
</style>