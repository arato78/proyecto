<?= $this->extend('plantilla/layoutp') ?>

<?= $this->section('contenido') ?>
<section class="content mt-4">
<div class="container-fluid">
<div class="row">
 <div class="col-12">

  <div class="card">
   <div class="card-header">
    <h3 class="card-title">Paises</h3>
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
    <a href="<?php echo base_url().'/catalogos/paises/nuevo'; ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo</a>
    <table class="table table-bordered table-sm table-hover text-nowrap mt-2">
     <thead class="table-dark">
      <tr>
       <th style="width: 5%">No.</th>
       <th style="width: 90%">Pais</th>
       <th style="width: 5%">Opciones</th>
      </tr>
     </thead>
     <tbody>
      
     <?php foreach($paises as $pais) :?>
      <tr></tr>
       <td scope="row"><?php echo $pais['idpais']; ?></td>
       <td><?php echo $pais['pais']; ?></td>
       <td>
        <a href="<?php echo base_url().'/catalogos/paises/editar/'.$pais['idpais']; ?>" class="btn btn-info btn-xs"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <a href="<?php echo base_url().'/catalogos/paises/eliminar/'.$pais['idpais']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></a>
       </td>
      </tr>
     <?php endforeach ?>

     </tbody>
    </table>

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