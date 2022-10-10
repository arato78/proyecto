<?php $this->extend('plantilla/layout') ?>

<?php $this->section('contenido') ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">

    <div class="card mt-4">
      <div class="card-header">
      <h2>Agregar Persona</h2>
      <a href="<?php echo base_url().'/personas' ?>" class="btn btn-danger">Regresar</a>
      </div>
      <div class="card-body">
        
        <form class="row g-3" action="<?php echo base_url().'/personas/recibe' ?>" method="POST">
      
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          
          <div class="col-md-6">
            <label for="paterno" class="form-label">Paterno</label>
            <input type="text" class="form-control" id="paterno" name="paterno">
          </div>

          <div class="col-12">
            <label for="materno" class="form-label">Materno</label>
            <input type="text" class="form-control" id="materno" name="materno" placeholder="1234 Main St">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </form>
      </div>
    </div>

    </div>
  </div>
</div>
<?php $this->endSection() ?>