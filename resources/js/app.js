require('./bootstrap');


import Vue from 'vue';

import IndexProduct from './components/product/Index'
import mostrarComponent from './components/product/mostrar'



new Vue({

components: {

  'index-product':IndexProduct,
  'mostrar-com':mostrarComponent

  


},

el: '#app'

})


