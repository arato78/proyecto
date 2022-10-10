<?= $this->extend('plantilla/layout') ?>

<?= $this->section('contenido') ?>
<div class="container mt-4">
  <div class="row">
  <div class="col">
    <div>
      <h1 class="display-1"> <i class="fas fa-hands"></i>Bienvenidos</h1>
      <p>Estimado Ciudadano (a) el Municipio de Comalcalco Tabasco pone a su disposición el siguiente formulario, el cual nos permitirá atender sus manifestaciones en contra de servidores públicos, obras y servicios que ofrece el Poder Ejecutivo Estatal, con el propósito de que exista un canal abierto de intercomunicación con la ciudadanía.</p>
      <p>Le informamos que la queja puede ser anónima y que en su caso, todos los datos personales proporcionados, se mantendrán bajo estricta confidencialidad. Así mismo le recomendamos proporcionar datos de contacto para recibir informacion del seguimiento de su queja o denuncia.</p>
      <p>Importante: Con el objeto de que esta Secretaría pueda brindar una atención eficaz y oportuna al seguimiento de su queja y/o denuncia, le sugerimos que esta sea clara y proporcione los datos suficientes y precisos que permitan darnos la posibilidad de identificarla plenamente.</p>
    </div>
  </div>
</div>

<div class="row">
<div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Ingresar</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <form id="frmAcceso" name="frmAcceso" action="" method="post" autocomplete="off">
          <label for="correo">Correo Electronico</label>
          <input type="text" id="correo" name="correo" class="form-control">

          <label for="contasena">Contraseña</label>
          <input type="password" id="contrasena" name="contrasena" class="form-control">

          <button type="submit" class="btn btn-success mt-2"><span class="fa fa-plus"></span> Ingresar</button>
        </form>
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Registro</h5>
      <p class="card-text">Ingrese los siguientes datos, la contraseña será enviada al correo registrado.</p>
    </div>
  </div>
</div>
</div>
</div>
<?= $this->endSection() ?>