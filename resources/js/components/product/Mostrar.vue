<template>
<div class="row">


        <div class="col-md-3" v-for="(rick,index) in rickandmortyapi" :key="index">

        <img :src="`${rick.image}`" alt="" class="img-fluid">
        <p>{{rick.name}}</p>
        </div>


</div>





</template>

<script>
//import { defineComponent } from '@vue/composition-api'

//import TableProduct from "./TableProduct";


export default {
  
  data() {
    return {


        url: `https://rickandmortyapi.com/api/character`,

        rickandmortyapi: []
     
    };
  },
  created (){

      this.getData();
  },

  methods: {

      async getData(){

            await axios.get(this.url).then(res =>{


                this.rickandmortyapi= res.data.results
            })

      }
  }

}
</script>
