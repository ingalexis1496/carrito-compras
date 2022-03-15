<template>
  <section>
    <form-product :product= "product"></form-product>
    <table-product :products= "all_products"></table-product>
  </section>
</template>

<script>
//import { defineComponent } from '@vue/composition-api'

//import TableProduct from "./TableProduct";
import TableProduct from "./TableProduct";
import FormProduct from "./FormProduct";

export default {
  props: ["products"],

  components: {
    // TableProduct,
    "table-product": TableProduct,
    "form-product": FormProduct
    
  },

  data() {
    return {
      all_products : this.products,
      product: {},
    };
  },
};
</script>
