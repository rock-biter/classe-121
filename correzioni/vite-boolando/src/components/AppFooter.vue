<template>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div>
          <h4>Boolando S.r.l.</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div>
          <p>Trovaci anche su</p>
          <ul class="flex">
            <li>X</li>
            <li>F</li>
            <li>I</li>
            <li>P</li>
            <li>YT</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>

.page-footer {
	background-color: black;
	color: white;
	padding: 16px 0;
}

.page-footer .row{
	justify-content: space-between;
}

.page-header .row {
	align-items: center;
}

.page-footer .row ul {
	gap: 20px;
}
</style>