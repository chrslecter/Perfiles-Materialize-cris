

<!DOCTYPE html>
<html>
  <?php require_once('includes/session.php'); ?>
  <?php require_once('includes/header.php'); ?>

<body >

<?php require_once('includes/nav.php'); ?>


  <main class="container">
 <div class="row">

  <form class="col s12" method="POST" action="includes/actualizar.php">
  <h5 align="center">Editar Perfil de: <?php echo $_GET['nombres']." - clase ".$_GET['clase']; ?></h5 align="center">
  <div class="card-panel">

    <div class="row">
      <div align="center" class="col s12 m12 l12">

        <input placeholder="" value="<?php echo $_GET['id']; ?>"  id="ID" name="ID" type="text" class="active validate" required hidden>
        <div class="row">
          <div class="col s12"><h5>Datos Personales</h5></div>
             <div class="input-field col l3 m6 s12">
                <input placeholder="" value="<?php echo $_GET['nombres']; ?>"  id="nombres" name="nombres" name="name" type="text" class="active validate" required>
                <label for="name">Nombres</label>
             </div>
             <div class="input-field col l3 m6 s12">
                <input placeholder="" value="<?php echo $_GET['apellidos']; ?>"  id="apellidos" name="apellidos" type="text" class="active validate" required>
                <label for="name"> Apellidos </label>
             </div>
             <div class="input-field col l3 m6 s12">
                <input placeholder="" value="<?php echo $_GET['genero']; ?>"  id="genero" name="genero" type="text" class="active validate" required>
                <label for="name"> Género </label>
              </div>
              <div class="input-field col l3 m6 s12">
                <input placeholder="" value="<?php echo $_GET['nacionalidad']; ?>"  id="nacionalidad" name="nacionalidad" type="text" class="active validate" required>
                <label for="name"> País de origen </label>
             </div>
         </div>
         <div class="row">
           <div class="input-field col l3 m6 s12">
             <input placeholder="" value="<?php echo $_GET['nickname']; ?>"  id="nickname" name="nickname" type="text" class="active validate" required>
             <label for="name"> Nickname </label>
          </div>
           <div class="input-field col l3 m6 s12">
                <input placeholder="" value="<?php echo $_GET['direccion']; ?>"  id="direccion" name="direccion" type="text" class="active validate" required>
                <label for="name"> Dirección actual </label>
             </div>
             <div class="input-field col l3 m6 s12">
                <input placeholder="" value="<?php echo $_GET['email']; ?>"  id="email" name="email" type="email" class="active validate" required>
                <label for="name"> Correo electrónico </label>
             </div>
             <div class="input-field col l3 m6 s12">
                <input placeholder="" value="<?php echo $_GET['telefono']; ?>"  id="telefono" name="telefono" type="tel" class="active validate" required>
                <label for="name"> Número telefónico <span id="extTelefono">CC: </span></label>
             </div>
             <div class="input-field col l3 m6 s12">
                <input placeholder="" value="<?php echo $_GET['movil']; ?>"  id="movil" name="movil" type="tel" class="active validate" required>
                <label for="name"> Número celular <span id="extMovil">CC: </span></label>
             </div>
         </div>


         <div class="row">
            <div class="col s12"><h5>Datos Universitarios</h5></div>
         </div>
         <div class="row">
                <div class="input-field col l4 m6 s12">
                    <input placeholder="" value="<?php echo $_GET['codigo']; ?>"  id="codigo" name="codigo" type="text" class="active validate" required>
                    <label for="name">Código</label>
                </div>
                <div class="input-field col l4 m6 s12  ">

                    <input placeholder="" value="<?php echo $_GET['clase']; ?>"  id="clase" name="clase" type="number" class="active validate" required>
                    <label for="name">Clase(Año de graduación)</label>
                 </div>
               <div class="col l4 m6 s12">

                   <select name="programaAcademico" id="programaAcademico" class="browser-default">
                    <option <?php if ($_GET['programa']=='0007') { echo "selected";} ?> value="0007">AGRONOMO</option>
                    <option <?php if ($_GET['programa']=='0077') { echo "selected";} ?> value="0077">AGRONOMO - PIA</option>
                    <option <?php if ($_GET['programa']=='0707') { echo "selected";} ?> value="0707">AGRONOMO - PPIA</option>
                    <option <?php if ($_GET['programa']=='0777') { echo "selected";} ?> value="0777">INGENIERO AGRONOMO</option>
                    <option <?php if ($_GET['programa']=='07771' && $_GET['orientacion']=="INGENIERIA AGRONOMICA" ) { echo "selected";} ?> value="07771">INGENIERIA AGRONOMICA</option>
                    <option <?php if ($_GET['programa']=='07772' && $_GET['orientacion']=="AGROINDUSTRIA ALIMENTARIA" ) { echo "selected";} ?> value="07772">INGENIERO EN AGROINDUSTRIA ALIMENTARIA</option>
                    <option <?php if ($_GET['programa']=='07773' && $_GET['orientacion']=="ADMINISTRACION DE AGRONEGOCIOS" ) { echo "selected";} ?> value="07773">INGENIERO EN ADMINISTRACION DE AGRONEGOCIOS</option>
                    <option <?php if ($_GET['programa']=='07774' && $_GET['orientacion']=="DESARROLLO SOCIOECONOMICO Y AMBIENTE" ) { echo "selected";} ?> value="07774">INGENIERO EN DESARROLLO SOCIOECONOMICO Y AMBIENTE</option>
                    <option <?php if ($_GET['programa']=='077741' && $_GET['orientacion']=="AMBIENTE Y DESARROLLO" ) { echo "selected";} ?> value="077741">INGENIERO EN AMBIENTE Y DESARROLLO</option>
                  </select>
                  <label>Programa</label>



                    <!-- <input placeholder="" value="<?php //echo $Titulo; ?>"  id="programa" name="programa" type="text" class="active validate" required>
                    <label for="name"> Programa </label> -->
                </div>
            </div>

            <div class="row">
              <div class="input-field col l3 m6 s12">

                    <input placeholder="" value="<?php echo $_GET['orientacion']; ?>"  id="orientacion" name="orientacion" type="text" class="active validate" required>
                    <label for="name"> Orientación </label>
                </div>
                <div class="input-field col l3 m6 s12">

                    <input placeholder="" value="<?php echo $_GET['diaGraduacion']; ?>"  id="diaGraduacion" name="diaGraduacion" type="number" class="active validate" required>
                    <label for="name"> Día de graduación </label>
                </div>
                <div class="input-field col l3 m6 s12">

                    <input placeholder="" value="<?php echo $_GET['mesGraduacion']; ?>"  id="mesGraduacion" name="mesGraduacion" type="number" class="active validate" required>
                    <label for="name"> mes de Graduacion </label>
                </div>
                <div class="input-field col l3 m6 s12">

                    <input placeholder="" value="<?php echo $_GET['estatus']; ?>"  id="estatus" name="estatus" type="text" class="active validate" required>
                    <label for="name"> Estatus </label>
                </div>
            </div>



        <div class="row">
          <div class="col s12"><h5>Datos de Pasantía</h5></div>

        </div>


        <div class="row">
            <div class="input-field col l4 m6 s12">

                <input placeholder="" value="<?php echo $_GET['lugarPasantia']; ?>"  id="lugarPasantia" name="lugarPasantia" type="text" class="active validate" required>
                <label for="name"> Lugar de pasantía </label>
            </div>
            <div class="input-field col l4 m6 s12">

                <input placeholder="" value="<?php echo $_GET['exp_pasantia']; ?>"  id="exp_pasantia" name="exp_pasantia" type="text" class="active validate" required>
                <label for="name"> Experiencia obtenida en su pasantía: </label>
            </div>
            <div class="input-field col l4 m6 s12">

                <input placeholder="" value="<?php echo $_GET['titulo_tesis']; ?>"  id="titulo_tesis" name="titulo_tesis" type="text" class="active validate" required>
                <label for="name"> Título del proyecto de graduación: </label>
            </div>

        </div>

        <div class="row">
            <div class="input-field col l4 m6 s12">

                <input placeholder="" value="<?php echo $_GET['asesor_tesis']; ?>"  id="asesor_tesis" name="asesor_tesis" type="text" class="active validate" required>
                <label for="name"> Asesor de Tesis </label>
            </div>

             <div class="input-field col l4 m6 s12">

                <input placeholder="" value="<?php echo $_GET['url_tesis']; ?>"  id="url_tesis" name="url_tesis" type="url" class="active validate" required>
                <label for="name"> URL Tesis</label>
            </div>
            <div class="input-field col l4 m6 s12">

                <input placeholder="" value="<?php echo $_GET['area_interes']; ?>"  id="area_interes" name="area_interes" type="text" class="active validate" required>
                <label for="name"> Area de interes </label>
            </div>
        </div>


        <div class="row">
            <div class="input-field col l4 m6 s12">

                <input placeholder="" value="<?php echo $_GET['financiado_por']; ?>"  id="financiado_por" name="financiado_por" type="text" class="active validate" required>
                <label for="name"> Financiado por: </label>
            </div>


             <div class="input-field col l4 m6 s12">

                <input placeholder="" value="<?php echo $_GET['fechaNacimiento']; ?>"  id="fechaNacimiento" name="fechaNacimiento" type="date" class="active validate" required>
                <label for="name"> Fecha de nacimiento </label>
             </div>

        </div>
        <div class="row">
          <dic class="col l12 m12 s12">
            <button align="center" class="waves-effect waves-light btn-large ripple-effect"  name="buscador" type="submit">
              <i class="material-icons left">send</i>Actualizar datos
            </button>
          </dic>
        </div>
      </div>
    </div>
    </div>
  </form>
<script type="text/javascript">

    if (window.XMLHttpRequest) {
    xmlhttp3 = new XMLHttpRequest();
    } else {
    xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp3.onreadystatechange=function() {
    if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
      var response=JSON.parse(xmlhttp3.responseText);
      var code = response[0].callingCodes[0];
      document.getElementById("extTelefono").innerHTML="<span id='extTelefono'> (<?php echo $_GET['nacionalidad']; ?>: +"+code+")</span>";
      document.getElementById("extMovil").innerHTML="<span id='extMovil'> (<?php echo $_GET['nacionalidad']; ?>: +"+code+")</span>";

    }
  }
  xmlhttp3.open("GET","https://restcountries.eu/rest/v2/name/<?php echo $_GET['nacionalidad']; ?>",true);
  xmlhttp3.send();


</script>
 <script>
        $(document).ready(function() {
    $('select').material_select();
  });
      </script>
  </div>
  </main>


<?php require_once('includes/footer.php'); ?>
  </body>
</html>




<!-- $boton='<a href="editarPerfil.php?id='.$f['ID'].'&url_tesis='.$f['url_tesis'].'&deceased='.$f['deceased'].'&date_deceased='.$f['date_deceased'].'&movil='.$f['movil'].'&telefono='.$f['telefono'].'&movil_2='.$f['movil_2'].'&telefono_2='.$f['telefono_2'].'&email='.$f['email'].'&direccion='.$f['direccion'].'&apodo='.$f['apodo'].'&financiado_por='.$f['financiado_por'].'&asesor_tesis='.$f['asesor_tesis'].'&clase='.$f['clase'].'&codigo='.$f['codigo'].'&nombres='.$f['nombres'].'&apellidos='.$f['apellidos'].'&nacionalidad='.$f['nacionalidad'].'&genero='.$f['genero'].'&programa='.$f['programa'].'&orientacion='.$f['orientacion'].'&diaGraduacion='.$f['dia_graduacion'].'&mesGraduacion='.$f['mes_graduacion'].'&estatus='.$f['estatus'].'&lugarPasantia='.$f['lugar_pasantia'].'&area_interes='.$f['area_interes'].'&titulo_tesis='.$f['titulo_tesis'].'&pa='.$f['pa'].'&fechaNacimiento='.$f['fecha_nacimiento'].'&anioIA='.$f['anioIA'].'&codigoIA='.$f['codigoIA'].'&exp_pasantia='.$f['exp_pasantia'].'&area_interes='.$f['area_interes'].'" class="btn-floating btn-move-up waves-effect waves-light ripple-effect red darken-2 btn-large right">
                          <i class="material-icons">edit</i>
                        </a>'; -->
