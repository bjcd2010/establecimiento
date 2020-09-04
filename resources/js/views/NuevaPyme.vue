<template>
<div>
    <div class="container">
        <h1 class="text-center mt-4">Registrar Establecimiento</h1>

        <div class="mt-5 row justify-content-center">
            <form class="col-md-9 col-xs-12 card card-body" method="POST" enctype="multipart/form-data">

                <fieldset class="borderp-4">
                    <legend class="text-primary">Nombre, Categoría e Imagen Principal</legend>

                    <div class="form-group">
                        <label for="nombre">Nombre Establecimiento</label>
                        <input id="name" v-model="pyme.name" type="text" class="form-control " placeholder="Nombre Establecimiento" name="nombre" value="">

                        <div class="invalid-feedback">

                        </div>

                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <select class="form-control " name="subcategoria_id" id="categoria" v-model="pyme.subcategory_id">
                            <option value="" selected disabled>--Seleccione--</option>

                            <option v-for="option in subcategories" v-bind:key="option.id" :value="option.id">
                                {{ option.name }}
                            </option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Imagen Principal</label>
                        <input name="image" type="file" class="form-control">

                        <div class="invalid-feedback">

                        </div>

                    </div>
                </fieldset>

                <fieldset class="borderp-4 mt-5">
                    <legend class="text-primary">Ubicación:</legend>

                    <div class="form-group">
                        <label for="formbuscador">Coloca la dirección del Establecimiento o Negocio</label>
                        <input id="formbuscador" type="text" class="form-control">
                        <p class="text-secondary mt-5 mb-3 text-center">El asistente colocará una dirección estimada o mueve el pin hacia el lugar correcto</p>
                    </div>

                    <div class="form-group">
                        <div id="mapa" style="height: 400px;"></div>
                    </div>

                    <p class="informacion">Confirma que los siguientes campos son correctos</p>

                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control " v-model="pyme.address" name="address" placeholder="Dirección" value="">

                        <div class="invalid-feedback">

                        </div>

                    </div>

                    <div class="form-group">
                        <label for="urbanization">Urbanización</label>
                        <input type="text" class="form-control " v-model="pyme.urbanization" name="urbanization" placeholder="Urbanización" value="">

                        <div class="invalid-feedback">

                        </div>

                    </div>

                    <input type="hidden" id="lat" name="lat" value="" v-model="pyme.lat">
                    <input type="hidden" id="lng" name="lng" value="" v-model="pyme.lng">
                </fieldset>

                <fieldset class="border p-4 mt-5">
                    <legend class="text-primary">Información Establecimiento: </legend>
                    <div class="form-group">
                        <label for="nombre">Teléfono</label>
                        <input type="tel" class="form-control " v-model="pyme.phone" placeholder="Teléfono Establecimiento" name="phone" value="">

                        <div class="invalid-feedback">

                        </div>

                    </div>

                    <div class="form-group">
                        <label for="nombre">Descripción</label>
                        <textarea class="form-control  " v-model="pyme.description" name="descripcion"></textarea>

                        <div class="invalid-feedback">

                        </div>

                    </div>

                    <div class="form-group">
                        <label for="nombre">Hora Apertura:</label>
                        <input type="time" class="form-control " v-model="pyme.open" name="open" value="">

                        <div class="invalid-feedback">

                        </div>

                    </div>

                    <div class="form-group">
                        <label for="nombre">Hora Cierre:</label>
                        <input type="time" class="form-control " v-model="pyme.close" name="close" value="">

                        <div class="invalid-feedback">

                        </div>

                    </div>
                </fieldset>

                <fieldset class="border p-4 mt-5">
                    <legend class="text-primary">Información Imagen: </legend>
                    <div class="form-group">
                        <label for="imagenes">Imagenes</label>
                        <div id="dropzone" class="dropzone form-control" name="dropzone"></div>
                    </div>
                </fieldset>

                <input type="text" id="uuid" name="uuid" value="">
                <input type="submit" class="btn btn-primary mt-3 d-block" value="Registra establecimiento">
            </form>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data: function () {
        return {
            subcategories: [],
            pyme: {}
        }
    },
    mounted() {
        axios.get('/subcategories')
            .then(response => {
                this.subcategories = response.data.subcategories;

            });
    },

}
</script>
