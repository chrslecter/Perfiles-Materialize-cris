<!DOCTYPE html>
<html>
  <?php require_once('includes/session.php'); ?>
  <?php require_once('includes/header.php'); ?>



<body >

<?php require_once('includes/nav.php'); ?>



  <main class="container">
    <div class="row">

      <div align="center" class="col s12 m12 l12">
      <h3 >LISTADO DE GRADUADOS</h3>
      <p>Para realizar la búsqueda,<br>introduce <strong>los Apellidos del Graduado</strong></p>
      <h6><strong><?php if(isset($_SESSION['perfiles_user']) ){echo "Usuario: ".$_SESSION['perfiles_user'];}?></strong></h6>
      </div>

    </div>
      <div align="center" class="container">
      <form  name="form1" method="GET" action="index.php" id="cdr" >


          <p>
             <input width="50%" class="buscar " id="busca" name="busca" type="search" placeholder="ARCE COBOS" autofocus >
             <button align="center" class="waves-effect waves-light btn-large ripple-effect" name="" type="submit">
      <i class="material-icons left">search</i>Buscar
    </button>

          </p>
      </form>
      </div>
        <?php require_once('includes/busqueda.php'); ?>
    </div>
    </div>
   </div>

  </main>


<?php require_once('includes/footer.php'); ?>
  </body>
</html>
