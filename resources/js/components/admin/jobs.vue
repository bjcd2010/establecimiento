<template>
<div class="container">

    <body class="mt-4">
        <button class="btn btn-primary" @click="openModal('new')">Crear Oferta de Empleo1</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

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
                        <button v-if="job.status=='ACTIVE'" class="btn btn-success" @click="getStatus(job.id)">Activo</button>
                        <button v-else class="btn btn-danger" @click="getStatus(job.id)">Activar</button>
                    </td>
                    <td v-text="job.establecimiento.name"></td>
                    <td colspan="2">
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Del</button>
                    </td>
                </tr>

            </tbody>
        </table>

        <!--Modal-->
        <div class="modal fade" tabindex="-1" :class="{'mostrar': modal}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-text="titleModal"></h5>
                        <button type="button" class="close" @click="closeModal()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Titulo</label>
                                <input type="text" v-model="name" class="form-control" placeholder="Titulo de empleo">
                                <small id="emailHelp" class="form-text text-muted">Ingrese titulo del peusta de trabajo</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input type="text" v-model="description" class="form-control" placeholder="Descripcion del puersto de trabajo">
                                <small id="emailHelp" class="form-text text-muted">Ingrese una descripción del puesto de trabajo</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Pago</label>
                                <input type="number" v-model="pay" class="form-control" placeholder="Descripcion del puersto de trabajo">
                                <small id="emailHelp" class="form-text text-muted">Ingrese sueldo</small>
                            </div>
                            <div class="form-group">
                                <label for="establecimiento_id">Establecimiento</label>
                                <select v-model="establecimiento_id" class="form-control" id="establecimiento_id">
                                    <option v-for="option in myPymes" v-bind:key="option.value">
                                        {{ option.name }}
                                    </option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="closeModal()">Close</button>
                        <button type="button" v-if="typeAction == 1" class="btn btn-primary">Save changes</button>
                        <button type="button" v-if="typeAction == 2" class="btn btn-primary">Update changes</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</div>
</template>

<script>
export default {
    data: function () {
        return {
            jobs: [],
            job: {},
            name: "",
            description: "",
            pay: 0,
            modal: 0,
            titleModal: "",
            typeAction: 0,
            establecimiento_id: 0,
            myPymes: [],
        }
    },
    mounted() {
        this.GET_JOBS();
        this.pymes();
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
        pymes() {
            axios.get('/pymes')
                .then(response => {
                    this.myPymes = response.data.pymes;
                    console.log(myPymes);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        estado(id) {
            let me = this;
            axios.get('/job/status/', {
                    params: {
                        "id": 1
                    }
                }).then(response => {
                    me.job = response.data.job;
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        getStatus(id) {
            let url = '/job/status/' + id;
            axios.put(url)
                .then(respuesta => {
                    //console.log('respuesta')
                    console.log(respuesta)
                    this.job = respuesta.data.job;
                    this.GET_JOBS();
                })
        },

        openModal(action, data = []) {
            switch (action) {
                case "new": {

                    this.modal = 1;
                    this.titleModal = 'Registrar Nueva Oferta de Empleo';
                    this.name = "";
                    this.description = "";
                    this.pay = 0;
                    this.typeAction = 1;
                    break;
                }
                case "update": {

                }
            }
        },

        closeModal() {
            this.modal = 0;
            this.titleModal = "";
            this.name = "";
            this.description = "";
            this.pay = 0;
        }
    },
}
</script>

<style>
.modal-content {
    margin-top: 60px;
    width: 100% !important;
    position: absolute !important;
}

.mostrar {
    display: list-item !important;
    opacity: 1 !important;

    position: absolute !important;
    background-color: #3c29297a !important;
}
</style>
