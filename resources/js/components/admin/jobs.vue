<template>
<div class="container">

    <body class="mt-4">
        <button class="btn btn-primary">Crear Oferta de Empleo1</button>

        <table class="table mt-4">
            <thead class="bg-success">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Pago</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="job in jobs" v-bind:key="job.id">
                    <th scope="row">1</th>
                    <td v-text="job.name"></td>
                    <td v-text="job.description"></td>
                    <td v-text="job.pay"></td>
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
        }
    },
}
</script>
