<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card mx-auto mb-5" style="max-width: 800px" v-for="item in list">
                <div class="card-header" v-text="item.user.name"></div>
                <img class="card-img-top" v-bind:src="item.ruta" v-bind:alt="item.nombre">
                <div class="card-body">
                    <p class="card-text" v-text="item.nombre"></p>
                </div>
                <div class="card-footer">
                    <!-- <comentario-by-foto-component v-bind:foto=item.id></comentario-by-foto-component> -->
                    <comentario-create-component v-bind:foto="item.id"></comentario-create-component>
                </div>
            </div>

            <infinite-loading @distance="1" @infinite="infiniteHandler">
                <div slot="no-more">--</div>
                <div slot="spinner">Cargando...</div>
                <div slot="no-results">Sin resultados</div>
            </infinite-loading>
        </div>
    </div>
</template>

<script>
    import ComentarioCreateComponent from './ComentarioCreateComponent.vue'
    import ComentarioByFotoComponent from './ComentarioByFotoComponent.vue'

    export default {
        components: {
            'ComentarioCreateComponent': ComentarioCreateComponent,
            // 'ComentarioByFotoComponent': ComentarioByFotoComponent
        },
        data() {
            return {
                list: [],
                page: 0
            }
        },
        methods: {
            infiniteHandler($state) {
                this.page++
                let url = window.location.origin +'/api/foto?page='+this.page
                axios.get(url)
                .then(response => {
                    let fotos = response.data.data
                    if(fotos.length){
                        this.list = this.list.concat(fotos)
                        $state.loaded()
                    }else{
                        $state.complete()
                    }
                })
            }
        }
    }
</script>