<template>
    <div class="content-wrapper">
   
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                  <i class="fa fa-align-justify"></i> Categorías
                  <button type="button" class="btn btn-secondary bg-info ml-2 border-transparent " data-toggle="modal" data-target="#modalNuevo">
                    <i class="fa fa-plus"></i>&nbsp;Nuevo
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <select class="form-control col-md-3" id="opcion" name="opcion">
                        <option value="nombre">Nombre</option>
                        <option value="descripcion">Descripción</option>
                      </select>
                      <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                      <button type="submit" class="btn btn-warning text-white rounded-0"><i class="fa fa-search"></i> Buscar</button>
                    </div>
                  </div>
                </div>
                <table class="table table-striped">
                  <tr>
                    <th >Opciones</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th >Estado</th>
                  </tr>
                  <tr>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                          data-target="#modalNuevo">
                          <i class="fa fa-pen"></i>
                        </button> &nbsp;
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                          data-target="#modalEliminar">
                          <i class="fa fa-trash"></i>
                        </button>
                    </td>
                    <td>Update software</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-danger">Inactivo</span></td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#modalNuevo">
                        <i class="fa fa-pen"></i>
                      </button> &nbsp;
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#modalEliminar">
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                    <td>Update software</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-success">Activo</span></td>
                  </tr>
                  
                  
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

          
          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
