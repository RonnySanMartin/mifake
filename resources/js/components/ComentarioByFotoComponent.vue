<template>
  <div class="row">
    <div v-for="item in list"></div>
  </div>
</template>

<script>
export default {
  props: ["foto"],
  data() {
    return {
      list: [],
      page: 0
    }
  },
  mounted() {
    axios.get('/comentarios-by-fotos')
  }
};
</script>