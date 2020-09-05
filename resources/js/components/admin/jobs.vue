<template>
<div class="container">

    <body class="mt-4">
        <button class="btn btn-primary">Crear Oferta de Empleo1</button>

        <table class="table mt-4">
            <thead class="bg-success">
                <tr>
                    <th scope="col">#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Pago</th>
                    <th>Estado</th>
                    <th>Tienda</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="job in jobs" v-bind:key="job.id">
                    <th scope="row" v-text="job.id"></th>
                    <td v-text="job.name"></td>
                    <td v-text="job.description"></td>
                    <td v-text="job.pay"></td>
                    <td>
                        <button v-if="job.status=='ACTIVE'" class="btn btn-success" @click="status(1)">Activo</button>
                        <button v-else class="btn btn-danger" @click="status(2)">Activar</button>
                    </td>
                    <td v-text="job.establecimiento.name"></td>
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
            jobs: [],
            job: {},
            msj: ""

        }
    },
    mounted() {
        this.GET_JOBS();
    },

    methods: {
        GET_JOBS() {
            axios.get('/jobs')
                .then(response => {
                    this.jobs = response.data.jobs;
                    console.log(jobs);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        status(id) {
            axios.get('/job/status/', {
                    params: {
                        "id": id
                    }
                }).then(response => {
                    this.job = response.data.job;
                    console.log(this.job);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
}
</script>
