<template>
  <form @submit="store">
    <div class="form-group">
      <label for="contenido">Comentario</label>
      <textarea
        class="form-control"
        id="contenido"
        name="contenido"
        rows="2"
        v-model="fields.contenido"
      ></textarea>
      <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
    </div>

    <button type="submit" class="btn btn-primary">Send message</button>

    <div v-if="success" class="alert alert-success mt-3">Message sent!</div>
  </form>
</template>

<script>
export default {
  props: ["foto"],
  data() {
    return {
      fields: {
        contenido: "",
        foto_id: this.foto,
        user_id: 1,
        status_id: 1,
      },
      errors: {},
      success: false,
      loaded: true
    };
  },
  methods: {
    store: function() {
      if (this.loaded) {
        this.loaded = false;
        this.success = false;
        this.errors = {};
        alert(JSON.stringify(this.fields));
        axios.post("comentarios", this.fields).then(response => {
            this.request = response.data
            alert(response.data)
          }).catch(error => {
            alert("error");
        });
      }
      // if (this.loaded) {
      //   this.loaded = false;
      //   this.success = false;
      //   this.errors = {};
      //   axios.post('/comentarios/store', this.fields).then(response => {
      //       alert(this.fields)
      //     this.fields = {}; //Clear input fields.
      //     this.loaded = true;
      //     this.success = true;
      //   }).catch(error => {
      //       alert(this.fields)
      //     this.loaded = true;
      //     console.log(error)
      //     if (error.response.status === 422) {
      //       this.errors = error.response.data.errors || {};
      //     }
      //   });
      // }
    }
  }
};
</script>