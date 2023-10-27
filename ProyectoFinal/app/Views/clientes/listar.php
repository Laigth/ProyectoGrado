            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Lista de Clientes</h3>&nbsp;
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group" style="display: flex; align-items: stretch;">
                                                    <form action="<?= base_url('clientes/buscar') ?>" method="post" style="display: flex; align-items: stretch;">
                                                        <input type="text" name="ciNit" class="form-control" placeholder="Ingresa el Número de CI/NIT" style="flex: 1;">
                                                        <button type="submit" class="btn btn-primary" style="flex: 1;">
                                                            <i class="mdi mdi-magnify"></i> Buscar
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary" onclick="location.href='<?= base_url('clientes/create') ?>'">
                                                    <i class="mdi mdi-account-multiple-plus"></i> Agregar Cliente
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($message)) : ?>
                                        <div class="col-md-12">
                                            <p style="font-size: 17px; color: blue; font-family: 'Elephant';"><?= $message ?></p>
                                        </div>
                                    <?php endif; ?>



                                    <!-- <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p> -->
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead class="text-white bg-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nit ó Ci</th>
                                                    <th>Nombre</th>
                                                    <th>Fecha de Registro</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($clientes as $cliente) : ?>
                                                    <tr>
                                                        <td><?= $cliente['id'] ?></td>
                                                        <td><?= $cliente['ciNit'] ?></td>
                                                        <td><?= $cliente['razonSocial'] ?></td>
                                                        <td><?= $cliente['fechaRegistro'] ?></td>
                                                        <td>
                                                            <form action="<?= base_url('clientes/delete/' . $cliente['id']) ?>" method="post">
                                                                <button type="button" class="btn btn-icon btn-primary btn-rounded mdi mdi-file-check" onclick="location.href='<?= base_url('clientes/editar/' . $cliente['id']) ?>'"></button>
                                                                <?php if ($cliente['estado'] == 1) : ?>
                                                                    <button type="button" class="btn btn-icon btn-rounded btn-danger mdi mdi-delete" onclick="location.href='<?= base_url('clientes/disable/' . $cliente['id']) ?>'"></button>
                                                                <?php endif; ?>
                                                                <?php if ($cliente['estado'] == 1) : ?>
                                                                    <button type="button" class="btn btn-icon btn-rounded btn-danger mdi mdi-cart-outline" onclick="location.href='<?= base_url('ventas/index/' . $cliente['id']) ?>'"></button>
                                                                <?php endif; ?>
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

            </div>
            </div>