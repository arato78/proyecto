<?= $this->extend('plantilla/layoutp') ?>

<?= $this->section('contenido') ?>
<section class="content mt-4">
<div class="container-fluid">
<div class="row">
 <div class="col-12">

  <div class="card">
   <div class="card-header">
    <h3 class="card-title">Estados (Nuevo)</h3>
    <div class="card-tools">
     <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
      <i class="fas fa-minus"></i>
     </button>
     <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
      <i class="fas fa-times"></i>
     </button>
    </div>
   </div>
   <div class="card-body">
    
   <form action="<?php echo base_url().'/catalogos/estados/guardar'; ?>" method="post">
   <label for="pais">Pais</label>
    <input type="text" name="idpais" id="idpais" class="form-control">
    <label for="pais">Estado</label>
    <input type="text" name="estado" id="estado" class="form-control">
    <input type="submit" value="Grabar" class="btn btn-primary mt-2">
   </form>

   </div>

   <div class="card-footer">
    Footer
   </div>

  </div>

 </div>
</div>
</div>
</section>
<?= $this->endSection() ?>