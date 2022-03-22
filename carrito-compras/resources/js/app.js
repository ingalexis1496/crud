require('./bootstrap');


import Vue from 'vue';

import IndexProduct from './components/product/Index'
import IndexCategory from './components/category/Index2'
import TableClient from './components/product/TableClient'
import mostrarComponent from './components/product/mostrar'
import FormProduct from './components/product/FormProduct'
import FormCategory from './components/category/FormCategory'



new Vue({

components: {

  'index-product':IndexProduct,
  'index-category': IndexCategory,
  'mostrar-com':mostrarComponent,
  'form-product':FormProduct,
  'form-category':FormCategory,
  'form-catalogo':TableClient,

  


},

el: '#app'

})


