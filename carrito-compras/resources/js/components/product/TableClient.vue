<template>
   <section class="container">
  <table class="table table-mt4">
    <thead>
      <tr>
           <th>Naame</th>
      </tr>
       
        <th>Image</th>
        <th>Price</th>
        <th>Action</th>
      <tr>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(product, index) in products" :key="index">
        <td>{{ product.name }}</td>
        <td> <img :src="product.url_image" height="50" width="50"></td>
         <td>{{ product.price }}</td>
       
        <td>
          <a :href="`/Product/edit/${product.id}`" class="btn btn-warning">Info</a>
          
         
        </td>
      </tr>
    </tbody>
  </table>
   </section>
</template>

<script>
export default {
  props: ["products"],
  
  methods: {
    /*
    async deletePerson(product, index) {
      await axios.delete(`/Product/delete/${product.id}`).then((res) => {
        if (res.data.deleted) {
          this.$parent.all_products.splice(index, 1);
        }
      });

      
    },
    mostrar(){

       console.log(this.products)
    }

   */
  },


  

  
};

</script>
