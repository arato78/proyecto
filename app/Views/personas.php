<?php $this->extend('plantilla/layoutp') ?>

<?php $this->section('contenido') ?>

<div class="container">

  <div class="row">
    <div class="col-sm12">
    <h1>Personas</h1>
    <a href="<?php echo base_url().'/personas/agregar' ?>" class="btn btn-primary">Agregar</a>
    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-borderless">
          <thead class="table-dark">
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Materno</th>
            <th>Paterno</th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($personas as $persona) :?>
            <tr>
            <td><?php echo $persona->id ?></td>
            <td><?php echo $persona->nombre ?></td>
            <td><?php echo $persona->paterno ?></td>
            <td><?php echo $persona->materno ?></td>
            <td><a href="<?php echo base_url().'/personas/editar/'.$persona->id ?>" class="btn btn-warning">Editar</a></td>
            <td><a href="<?php echo base_url().'/personas/eliminar/'.$persona->id ?>" class="btn btn-danger">Eliminar</a></td>
            </tr>
          <?php endforeach; ?>    
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>