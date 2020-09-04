<template>
<div class="container">

    <body class="mt-4">

        <router-link :to="{name: 'nueva-pyme'}" class="btn btn-primary">Crear Nueva Tienda</router-link>

        <table class="table mt-4">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Subcategoría</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="pyme in pymes" v-bind:key="pyme.id">
                    <td v-text="pyme.id"></td>
                    <td v-text="pyme.name"></td>
                    <td v-text="pyme.subcategory.name"></td>
                    <td v-if="pyme.status == 'ACTIVE'">
                        <button class="btn btn-success">Activo</button>
                    </td>
                    <td v-else>
                        <button class="btn btn-danger">Activar</button>
                    </td>
                    <td colspan="2">
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Del</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </body>
</div>
</template>

<script>
export default {
    data: function () {
        return {
            //pymes: [],
        }
    },
    mounted() {
        axios.get('/pymes')
            .then(response => {
                // this.pymes = response.data.pymes;
                this.$store.commit("GET_PYMES", response.data.pymes);
            });
    },

    computed: {
        pymes() {
            return this.$store.state.pymes;
        }
    }
}
</script>
