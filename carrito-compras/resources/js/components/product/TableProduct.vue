
<template>
  <table class="table table-mt4">
    <thead>
      <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(product, index) in products" :key="index">
        <td>{{ product.name }}</td>
        <td> <img :src="product.url_image" height="50" width="50"></td>
        <td>{{ product.description }}</td>
        <td>{{ product.price }}</td>
        <td>{{ product.stock }}</td>
        <td>
          <a :href="`/Product/edit/${product.id}`" class="btn btn-warning">Edit</a>
          <a
            @click.prevent="deletePerson(product, index)"
            class="btn btn-danger">Delete</a>
            <button @click="mostrar"></button>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  props: ["products"],
  
  methods: {
    
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

   
  },


  

  
};

</script>
