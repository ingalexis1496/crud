<template>
  <section class="container">

    
    <form class="form" @submit.prevent="storeCategories">
      <div class="form-group row">
        <div class="col-md-12">
          <label>Name</label>
          <input
            type="text"
            v-model="category.name"
            class="form-control"
            required />
        </div>
        

        <div class="col-md-12 mt-4 text-center">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </section>
</template>   

   <script >
export default {
  props: ["category"],

  data() {
    return {
      backend_errors: {},
    };
  },
  methods: {
    async storeCategories() {
      await axios
        .post(`/Category/store`, this.category)
        .then((res) => {
          if (res.data.saved) {
            this.backend_errors = {};
            this.category = {};
            this.$parent.all_categories.push(res.data.category);

            alert("Product Saved");
          }
        })
        .catch((err) => {
          this.backend_errors = err.response.data.errors;
        });
    },
  },
};
</script>