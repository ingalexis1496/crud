<template>
  <section>
   
   <form-category :category= "category"></form-category>
   <table-category :categories= "all_categories"></table-category>
  </section>
</template>

<script>
//import { defineComponent } from '@vue/composition-api'

//import TableProduct from "./TableProduct";

import FormCategory from "./FormCategory";
import TableCategory from "./TableCategory";
//import FormCategory from '../category/FormCategory.vue';

export default {
  props: ["categories"],
         
  

  components: {

    'form-category': FormCategory,
    'table-category':TableCategory,

    
  },

  data() {
   
    return {
      all_categories : this.categories,
      category:{},
      
    };
    
  },

};

</script>