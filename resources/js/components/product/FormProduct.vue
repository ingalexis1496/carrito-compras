


<template>
  <section>
    <form class="form" @submit.prevent="storeProducts">
      <div class="form-group row">
        <div class="col-md-12">
          <label>Name</label>
          <input
            type="text"
            v-model="product.name"
            class="form-control"
            required
          />
        </div>
        <div class="col-md-12">
          <label>Image</label> <br />

          <div class="formValue">
            <!--  <input class="change" type="file" @change="handleFileChange" ref="inputer" isvalid="yes"/>-->
            <input
              type="text"
              v-model="product.url_image"
              class="form-control"
              required
            />
          </div>
        </div>

        <div class="col-md-12">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea
            class="form-control"
            v-model="product.description"
            rows="3"
          ></textarea>
        </div>

        <div class="col-md-12">
          <label>Price</label>
          <input
            type="text"
            class="form-control"
            v-model="product.price"
            required
          />
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
  props: ["product"],

  data() {
    return {
      backend_errors: {},
    };
  },
  methods: {
    async storeProducts() {
      await axios
        .post(`/Product/store`, this.product)
        .then((res) => {
          if (res.data.saved) {
            this.backend_errors = {};
            this.product = {};
            this.$parent.all_products.push(res.data.product);

            alert("Persona Guardada");
          }
        })
        .catch((err) => {
          this.backend_errors = err.response.data.errors;
        });
    },
  },
};
</script>
      
    


    
