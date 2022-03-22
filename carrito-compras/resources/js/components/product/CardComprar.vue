<template>
    

<div class="card"  style="width: 18rem;">
     <form a method="POST" class="form">  
  <img class="card-img-top" src="" alt="Card image cap">
  <div class="card-body">
    
    <p  value="{[$products->name}}" class="card-text"></p>
   <!-- <input type="card-title" class="form-control" name="name" value="{{$products->name}}" required/>-->
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
     </form>
</div>
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
