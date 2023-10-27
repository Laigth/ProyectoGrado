      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div>
              <button class="btn btn-success mdi mdi-library-plus" onclick="location.href='<?= base_url('categoria/create') ?>'"> Agregar Categoria</button>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lista Categorias</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead class="text-white bg-dark">
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Descripción</th>
                          <th>Fecha de Registro</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($categoria as $categoria) : ?>
                          <tr>
                            <td><?= $categoria['id'] ?></td>
                            <td><?= $categoria['nombre'] ?></td>
                            <td><?= $categoria['descripcion'] ?></td>
                            <td><?= $categoria['fechaRegistro'] ?></td>
                            <td>

                              <form action="<?= base_url('categoria/delete/' . $categoria['id']) ?>" method="POST">
                                <button type="button" class="btn btn-icon btn-primary btn-rounded mdi mdi-file-check" onclick="location.href='<?= base_url('categoria/editar/' . $categoria['id']) ?>'"></button>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-icon btn-rounded btn-dark mdi mdi-delete"></button>
                              </form>

                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>

                  </div>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->