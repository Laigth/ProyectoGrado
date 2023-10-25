<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <img src="<?= base_url('images/imagenes/fondo-form.jpg') ?>" id="bg" alt="">

                        <h4 class="card-title">Editar Datos del Veterinario</h4>

                        <form class="forms-sample" action="<?= base_url('medicos/update/' . $medicos['id']) ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $medicos['nombre'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" value="<?= $medicos['apellido'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Correo:</label>
                                <input type="email" class="form-control" name="email" id="email" value="<?= $medicos['email'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">Telefóno:</label>
                                <input type="number" class="form-control" name="telefono" id="telefono" value="<?= $medicos['telefono'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="especialidad">Especialidad:</label>
                                <input type="text" class="form-control" name="especialidad" id="especialidad" value="<?= $medicos['especialidad'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="licencia">Licencia:</label>
                                <input type="text" class="form-control" name="licencia" id="licencia" value="<?= $medicos['licencia'] ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary me-2" value="Guardar">Guardar</button>
                            <button type="button" class="btn btn-light" onclick="window.history.back();">Cancelar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>