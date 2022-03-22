<template>
  <section class="container">
  <table class="table table-mt4">
    <thead>
      <tr>
        <th>Name</th>
       
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(category, index2) in categories" :key="index2">
        <td>{{ category.name }}</td>
     
        <td>
          <a :href="`/Category/edit/${category.id}`" class="btn btn-warning">Edit</a>
          <a
            @click.prevent="deleteCategory(category, index2)"
            class="btn btn-danger">Delete</a>
        
        </td>
      </tr>
    </tbody>
  </table>
  </section>
</template>

<script>
export default {
  props: ["categories"],
  
  methods: {
    
    async deleteCategory(category, index2) {
      await axios.delete(`/Category/delete/${category.id}`).then((res) => {
        if (res.data.deleted) {
          this.$parent.all_categories.splice(index2, 1);
        }
      });

      
    },
   

   
  },


  

  
};

</script>
