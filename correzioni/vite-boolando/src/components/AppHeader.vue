<template>
  <header class="page-header">
    <nav class="container">
      <div class="row">
        <ul class="flex">
          <li v-for="link in menu" :key="link.id">{{ link.text }}</li>          
        </ul>

        <a class="logo" href="#">
          <img src="/boolean-logo.png" alt="" />
        </a>

        <ul class="flex">
          <li v-html="entity"></li>
          <li>&hearts;</li>
          <li>&hearts;</li>
        </ul>
      </div>
    </nav>
    <div class="container" v-html="html"></div>
  </header>
</template>

<script>
  export default {
    data() {
      return {
        entity: '&hearts;',
        html: '<p>Sono un paragrafo</p>',
        menu: [
          {
            id: 1,
            text: 'Donna',
            href: '#',
            title: 'Vai alla sezione dedicata alle donne'
          },
          {
            id: 2,
            text: 'Uomo',
            href: '#',
            title: 'Vai alla sezione dedicata agli uomini'
          },
          {
            id: 3,
            text: 'Bambini',
            href: '#',
            title: 'Vai alla sezione dedicata ai bambini'
          }
        ]
      }
    }
  }
</script>

<style lang="scss" scoped>
.page-header {
	background-color: #fe6900;
	color: white;
	padding: 16px 0;
	box-shadow: 0px 0px 20px 2px rgba(0, 0, 0.1);
}

.page-header .row {
	justify-content: space-between;
}

.page-header .row {
	align-items: center;
}

.page-header .row ul {
	gap: 20px;
}

.logo img {
	height: 32px;
}
</style>