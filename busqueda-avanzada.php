<!DOCTYPE html>
<html>
  <?php require_once('includes/session.php'); 
    if (isset($_SESSION)) {
     require_once('includes/security.php');
    if (security($_SERVER['PHP_SELF'])) {
      // print_r('accesoPrivado');
      
    require_once('includes/header.php');
  ?>
    <body >
      <?php require_once('includes/nav.php'); ?>



        <main class="container">
          
          <div class="row">
            <div align="center" class="col s12 m12 l12">
              <h3>LISTADO DE GRADUADOS</h3>
              <h6><strong><?php if(isset($_SESSION['perfiles_user']) ){echo "Busqueda avanzada: Usuario: ".$_SESSION['perfiles_user'];}?></strong></h6>
              <h6 id="error">Selecciona el dato que necesitas.</h6>
            </div>
          </div>

          <div align="center" class="">
            <form  name="form1" method="GET"  id="cdr" >
              <div class="row">

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="codigo" />
                      <label for="codigo">Código</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <input name="codigoInput" hidden disabled required value="<?php if(isset($_GET['codigoInput'])){ echo $_GET['codigoInput'];}?>" id="codigoInput" type="text" class="validate">
                    <label for="codigoInput">Código</label>
                  </div>
                </div>


                <div class="col s12 m6 l6">

                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="nombres"  />
                      <label for="nombres">Nombres</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <input name="nombresInput" hidden disabled required value="<?php if(isset($_GET['nombresInput'])){ echo $_GET['nombresInput'];}?>" id="nombresInput" type="text" class="validate">
                    <label for="NombresInput">Nombres</label>
                  </div>
                </div>

                </div>
                <div class="row">
                

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="apellidos"  />
                      <label for="apellidos">Apellidos</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <input name="apellidosInput" hidden disabled required value="<?php if(isset($_GET['apellidosInput'])){ echo $_GET['apellidosInput'];}?>" id="apellidosInput" type="text" class="validate">
                    <label for="apellidosInput">Apellidos</label>
                  </div>
                </div>

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="clase"  />
                      <label for="clase">Clase</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <input name="claseInput" hidden disabled required value="<?php if(isset($_GET['claseInput'])){ echo $_GET['claseInput'];}?>" id="claseInput" type="number" class="validate">
                    <label for="claseInput">Clase</label>
                  </div>
                </div>


                </div>
                <div class="row">

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="carrera"  />
                      <label for="carrera">Carrera</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <select id="carreraInput" name="carreraInput" hidden disabled >
                    <option value="">Selecciona una carrera</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='0007'){echo "selected";}} ?> value="0007">AGRONOMO</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='0077'){echo "selected";}} ?> value="0077">AGRONOMO - PIA</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='0707'){echo "selected";}} ?> value="0707">AGRONOMO - PPIA</option>
                    <option disabled>-- 4X4 --</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='07771'){echo "selected";}} ?> value="07771">INGENIERIA AGRONOMICA</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='07772'){echo "selected";}} ?> value="07772">INGENIERO EN AGROINDUSTRIA ALIMENTARIA</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='07773'){echo "selected";}} ?> value="07773">INGENIERO EN ADMINISTRACION DE AGRONEGOCIOS</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='07774'){echo "selected";}} ?> value="07774">INGENIERO EN AMBIENTE Y DESARROLLO</option>
                    <option disabled>-- Clases 2002 / 2012</option>
  
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='077721'){echo "selected";}} ?> value="077721">AGROINDUSTRIA</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='077731'){echo "selected";}} ?> value="077731">GESTION DE AGRONEGOCIOS</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='077741'){echo "selected";}} ?> value="077741">DESARROLLO SOCIOECONOMICO Y AMBIENTE</option>
                  </select>
                   
                  </div>
                </div>

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="pais"  />
                      <label for="pais">País</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <select name="paisInput" id="paisInput"  >
                        <option value="">Selecciona un país</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Afganistán'){echo "selected";}} ?>  value="Afganistán">Afganistán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Albania'){echo "selected";}} ?>  value="Albania">Albania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Alemania'){echo "selected";}} ?>  value="Alemania">Alemania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Andorra'){echo "selected";}} ?>  value="Andorra">Andorra</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Angola'){echo "selected";}} ?>  value="Angola">Angola</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Anguilla'){echo "selected";}} ?>  value="Anguilla">Anguilla</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Antártida'){echo "selected";}} ?>  value="Antártida">Antártida</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Antigua y Barbuda'){echo "selected";}} ?>  value="Antigua y Barbuda">Antigua y Barbuda</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Antillas Holandesas'){echo "selected";}} ?>  value="Antillas Holandesas">Antillas Holandesas</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Arabia Saudí'){echo "selected";}} ?>  value="Arabia Saudí">Arabia Saudí</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Argelia'){echo "selected";}} ?>  value="Argelia">Argelia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Argentina'){echo "selected";}} ?>  value="Argentina">Argentina</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Armenia'){echo "selected";}} ?>  value="Armenia">Armenia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Aruba'){echo "selected";}} ?>  value="Aruba">Aruba</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Australia'){echo "selected";}} ?>  value="Australia">Australia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Austria'){echo "selected";}} ?>  value="Austria">Austria</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Azerbaiyán'){echo "selected";}} ?>  value="Azerbaiyán">Azerbaiyán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bahamas'){echo "selected";}} ?>  value="Bahamas">Bahamas</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bahrein'){echo "selected";}} ?>  value="Bahrein">Bahrein</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bangladesh'){echo "selected";}} ?>  value="Bangladesh">Bangladesh</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Barbados'){echo "selected";}} ?>  value="Barbados">Barbados</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bélgica'){echo "selected";}} ?>  value="Bélgica">Bélgica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Belice'){echo "selected";}} ?>  value="Belice">Belice</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Benin'){echo "selected";}} ?>  value="Benin">Benin</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bermudas'){echo "selected";}} ?>  value="Bermudas">Bermudas</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bielorrusia'){echo "selected";}} ?>  value="Bielorrusia">Bielorrusia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Birmania'){echo "selected";}} ?>  value="Birmania">Birmania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bolivia'){echo "selected";}} ?>  value="Bolivia">Bolivia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bosnia y Herzegovina'){echo "selected";}} ?>  value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Botswana'){echo "selected";}} ?>  value="Botswana">Botswana</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Brasil'){echo "selected";}} ?>  value="Brasil">Brasil</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Brunei'){echo "selected";}} ?>  value="Brunei">Brunei</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bulgaria'){echo "selected";}} ?>  value="Bulgaria">Bulgaria</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Burkina Faso'){echo "selected";}} ?>  value="Burkina Faso">Burkina Faso</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Burundi'){echo "selected";}} ?>  value="Burundi">Burundi</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bután'){echo "selected";}} ?>  value="Bután">Bután</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Cabo Verde'){echo "selected";}} ?>  value="Cabo Verde">Cabo Verde</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Camboya'){echo "selected";}} ?>  value="Camboya">Camboya</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Camerún'){echo "selected";}} ?>  value="Camerún">Camerún</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Canadá'){echo "selected";}} ?>  value="Canadá">Canadá</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Chad'){echo "selected";}} ?>  value="Chad">Chad</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Chile'){echo "selected";}} ?>  value="Chile">Chile</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='China'){echo "selected";}} ?>  value="China">China</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Chipre'){echo "selected";}} ?>  value="Chipre">Chipre</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Ciudad del Vaticano (Santa '){echo "selected";}} ?>  value="Ciudad del Vaticano (Santa ">Ciudad del Vaticano (Santa Sede)</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Colombia'){echo "selected";}} ?>  value="Colombia">Colombia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Comores'){echo "selected";}} ?>  value="Comores">Comores</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Congo'){echo "selected";}} ?>  value="Congo">Congo</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Congo, República Democrática '){echo "selected";}} ?>  value="Congo, República Democrática ">Congo, República Democrática del</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Corea'){echo "selected";}} ?>  value="Corea">Corea</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Corea del Norte'){echo "selected";}} ?>  value="Corea del Norte">Corea del Norte</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Costa de Marfíl'){echo "selected";}} ?>  value="Costa de Marfíl">Costa de Marfíl</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Costa Rica'){echo "selected";}} ?>  value="Costa Rica">Costa Rica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Croacia (Hrvatska)'){echo "selected";}} ?>  value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Cuba'){echo "selected";}} ?>  value="Cuba">Cuba</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Dinamarca'){echo "selected";}} ?>  value="Dinamarca">Dinamarca</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Djibouti'){echo "selected";}} ?>  value="Djibouti">Djibouti</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Dominica'){echo "selected";}} ?>  value="Dominica">Dominica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Ecuador'){echo "selected";}} ?>  value="Ecuador">Ecuador</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Egipto'){echo "selected";}} ?>  value="Egipto">Egipto</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='El Salvador'){echo "selected";}} ?>  value="El Salvador">El Salvador</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Emiratos Árabes Unidos'){echo "selected";}} ?>  value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Eritrea'){echo "selected";}} ?>  value="Eritrea">Eritrea</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Eslovenia'){echo "selected";}} ?>  value="Eslovenia">Eslovenia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='España'){echo "selected";}} ?>  value="España">España</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Estados Unidos'){echo "selected";}} ?>  value="Estados Unidos">Estados Unidos</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Estonia'){echo "selected";}} ?>  value="Estonia">Estonia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Etiopía'){echo "selected";}} ?>  value="Etiopía">Etiopía</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Fiji'){echo "selected";}} ?>  value="Fiji">Fiji</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Filipinas'){echo "selected";}} ?>  value="Filipinas">Filipinas</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Finlandia'){echo "selected";}} ?>  value="Finlandia">Finlandia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Francia'){echo "selected";}} ?>  value="Francia">Francia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Gabón'){echo "selected";}} ?>  value="Gabón">Gabón</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Gambia'){echo "selected";}} ?>  value="Gambia">Gambia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Georgia'){echo "selected";}} ?>  value="Georgia">Georgia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Ghana'){echo "selected";}} ?>  value="Ghana">Ghana</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Gibraltar'){echo "selected";}} ?>  value="Gibraltar">Gibraltar</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Granada'){echo "selected";}} ?>  value="Granada">Granada</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Grecia'){echo "selected";}} ?>  value="Grecia">Grecia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Groenlandia'){echo "selected";}} ?>  value="Groenlandia">Groenlandia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guadalupe'){echo "selected";}} ?>  value="Guadalupe">Guadalupe</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guam'){echo "selected";}} ?>  value="Guam">Guam</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guatemala'){echo "selected";}} ?>  value="Guatemala">Guatemala</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guayana'){echo "selected";}} ?>  value="Guayana">Guayana</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guayana Francesa'){echo "selected";}} ?>  value="Guayana Francesa">Guayana Francesa</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guinea'){echo "selected";}} ?>  value="Guinea">Guinea</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guinea Ecuatorial'){echo "selected";}} ?>  value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guinea-Bissau'){echo "selected";}} ?>  value="Guinea-Bissau">Guinea-Bissau</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Haití'){echo "selected";}} ?>  value="Haití">Haití</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Honduras'){echo "selected";}} ?>  value="Honduras">Honduras</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Hungría'){echo "selected";}} ?>  value="Hungría">Hungría</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='India'){echo "selected";}} ?>  value="India">India</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Indonesia'){echo "selected";}} ?>  value="Indonesia">Indonesia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Irak'){echo "selected";}} ?>  value="Irak">Irak</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Irán'){echo "selected";}} ?>  value="Irán">Irán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Irlanda'){echo "selected";}} ?>  value="Irlanda">Irlanda</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Isla Bouvet'){echo "selected";}} ?>  value="Isla Bouvet">Isla Bouvet</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Isla de Christmas'){echo "selected";}} ?>  value="Isla de Christmas">Isla de Christmas</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islandia'){echo "selected";}} ?>  value="Islandia">Islandia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Caimán'){echo "selected";}} ?>  value="Islas Caimán">Islas Caimán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Cook'){echo "selected";}} ?>  value="Islas Cook">Islas Cook</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas de Cocos o Keeling'){echo "selected";}} ?>  value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Faroe'){echo "selected";}} ?>  value="Islas Faroe">Islas Faroe</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Heard y McDonald'){echo "selected";}} ?>  value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Malvinas'){echo "selected";}} ?>  value="Islas Malvinas">Islas Malvinas</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Marianas del Norte'){echo "selected";}} ?>  value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Marshall'){echo "selected";}} ?>  value="Islas Marshall">Islas Marshall</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas menores de Estados Unidos'){echo "selected";}} ?>  value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Palau'){echo "selected";}} ?>  value="Islas Palau">Islas Palau</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Salomón'){echo "selected";}} ?>  value="Islas Salomón">Islas Salomón</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Svalbard y Jan Mayen'){echo "selected";}} ?>  value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Tokelau'){echo "selected";}} ?>  value="Islas Tokelau">Islas Tokelau</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Turks y Caicos'){echo "selected";}} ?>  value="Islas Turks y Caicos">Islas Turks y Caicos</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Vírgenes (EEUU)'){echo "selected";}} ?>  value="Islas Vírgenes (EEUU)">Islas Vírgenes (EEUU)</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Vírgenes (Reino Unido)'){echo "selected";}} ?>  value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Islas Wallis y Futuna'){echo "selected";}} ?>  value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Israel'){echo "selected";}} ?>  value="Israel">Israel</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Italia'){echo "selected";}} ?>  value="Italia">Italia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Jamaica'){echo "selected";}} ?>  value="Jamaica">Jamaica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Japón'){echo "selected";}} ?>  value="Japón">Japón</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Jordania'){echo "selected";}} ?>  value="Jordania">Jordania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Kazajistán'){echo "selected";}} ?>  value="Kazajistán">Kazajistán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Kenia'){echo "selected";}} ?>  value="Kenia">Kenia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Kirguizistán'){echo "selected";}} ?>  value="Kirguizistán">Kirguizistán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Kiribati'){echo "selected";}} ?>  value="Kiribati">Kiribati</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Kuwait'){echo "selected";}} ?>  value="Kuwait">Kuwait</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Laos'){echo "selected";}} ?>  value="Laos">Laos</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Lesotho'){echo "selected";}} ?>  value="Lesotho">Lesotho</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Letonia'){echo "selected";}} ?>  value="Letonia">Letonia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Líbano'){echo "selected";}} ?>  value="Líbano">Líbano</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Liberia'){echo "selected";}} ?>  value="Liberia">Liberia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Libia'){echo "selected";}} ?>  value="Libia">Libia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Liechtenstein'){echo "selected";}} ?>  value="Liechtenstein">Liechtenstein</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Lituania'){echo "selected";}} ?>  value="Lituania">Lituania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Luxemburgo'){echo "selected";}} ?>  value="Luxemburgo">Luxemburgo</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Macedonia, Ex-República Yugoslava '){echo "selected";}} ?>  value="Macedonia, Ex-República Yugoslava ">Macedonia, Ex-República Yugoslava de</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Madagascar'){echo "selected";}} ?>  value="Madagascar">Madagascar</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Malasia'){echo "selected";}} ?>  value="Malasia">Malasia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Malawi'){echo "selected";}} ?>  value="Malawi">Malawi</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Maldivas'){echo "selected";}} ?>  value="Maldivas">Maldivas</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Malí'){echo "selected";}} ?>  value="Malí">Malí</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Malta'){echo "selected";}} ?>  value="Malta">Malta</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Marruecos'){echo "selected";}} ?>  value="Marruecos">Marruecos</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Martinica'){echo "selected";}} ?>  value="Martinica">Martinica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Mauricio'){echo "selected";}} ?>  value="Mauricio">Mauricio</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Mauritania'){echo "selected";}} ?>  value="Mauritania">Mauritania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Mayotte'){echo "selected";}} ?>  value="Mayotte">Mayotte</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='México'){echo "selected";}} ?>  value="México">México</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Micronesia'){echo "selected";}} ?>  value="Micronesia">Micronesia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Moldavia'){echo "selected";}} ?>  value="Moldavia">Moldavia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Mónaco'){echo "selected";}} ?>  value="Mónaco">Mónaco</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Mongolia'){echo "selected";}} ?>  value="Mongolia">Mongolia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Montserrat'){echo "selected";}} ?>  value="Montserrat">Montserrat</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Mozambique'){echo "selected";}} ?>  value="Mozambique">Mozambique</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Namibia'){echo "selected";}} ?>  value="Namibia">Namibia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Nauru'){echo "selected";}} ?>  value="Nauru">Nauru</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Nepal'){echo "selected";}} ?>  value="Nepal">Nepal</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Nicaragua'){echo "selected";}} ?>  value="Nicaragua">Nicaragua</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Níger'){echo "selected";}} ?>  value="Níger">Níger</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Nigeria'){echo "selected";}} ?>  value="Nigeria">Nigeria</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Niue'){echo "selected";}} ?>  value="Niue">Niue</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Norfolk'){echo "selected";}} ?>  value="Norfolk">Norfolk</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Noruega'){echo "selected";}} ?>  value="Noruega">Noruega</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Nueva Caledonia'){echo "selected";}} ?>  value="Nueva Caledonia">Nueva Caledonia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Nueva Zelanda'){echo "selected";}} ?>  value="Nueva Zelanda">Nueva Zelanda</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Omán'){echo "selected";}} ?>  value="Omán">Omán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Países Bajos'){echo "selected";}} ?>  value="Países Bajos">Países Bajos</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Panamá'){echo "selected";}} ?>  value="Panamá">Panamá</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Papúa Nueva Guinea'){echo "selected";}} ?>  value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Paquistán'){echo "selected";}} ?>  value="Paquistán">Paquistán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Paraguay'){echo "selected";}} ?>  value="Paraguay">Paraguay</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Perú'){echo "selected";}} ?>  value="Perú">Perú</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Pitcairn'){echo "selected";}} ?>  value="Pitcairn">Pitcairn</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Polinesia Francesa'){echo "selected";}} ?>  value="Polinesia Francesa">Polinesia Francesa</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Polonia'){echo "selected";}} ?>  value="Polonia">Polonia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Portugal'){echo "selected";}} ?>  value="Portugal">Portugal</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Puerto Rico'){echo "selected";}} ?>  value="Puerto Rico">Puerto Rico</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Qatar'){echo "selected";}} ?>  value="Qatar">Qatar</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Reino Unido'){echo "selected";}} ?>  value="Reino Unido">Reino Unido</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='República Centroafricana'){echo "selected";}} ?>  value="República Centroafricana">República Centroafricana</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='República Checa'){echo "selected";}} ?>  value="República Checa">República Checa</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='República de Sudáfrica'){echo "selected";}} ?>  value="República de Sudáfrica">República de Sudáfrica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='República Dominicana'){echo "selected";}} ?>  value="República Dominicana">República Dominicana</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='República Eslovaca'){echo "selected";}} ?>  value="República Eslovaca">República Eslovaca</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Reunión'){echo "selected";}} ?>  value="Reunión">Reunión</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Ruanda'){echo "selected";}} ?>  value="Ruanda">Ruanda</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Rumania'){echo "selected";}} ?>  value="Rumania">Rumania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Rusia'){echo "selected";}} ?>  value="Rusia">Rusia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Sahara Occidental'){echo "selected";}} ?>  value="Sahara Occidental">Sahara Occidental</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Saint Kitts y Nevis'){echo "selected";}} ?>  value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Samoa'){echo "selected";}} ?>  value="Samoa">Samoa</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Samoa Americana'){echo "selected";}} ?>  value="Samoa Americana">Samoa Americana</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='San Marino'){echo "selected";}} ?>  value="San Marino">San Marino</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='San Vicente y Granadinas'){echo "selected";}} ?>  value="San Vicente y Granadinas">San Vicente y Granadinas</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Santa Helena'){echo "selected";}} ?>  value="Santa Helena">Santa Helena</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Santa Lucía'){echo "selected";}} ?>  value="Santa Lucía">Santa Lucía</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Santo Tomé y Príncipe'){echo "selected";}} ?>  value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Senegal'){echo "selected";}} ?>  value="Senegal">Senegal</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Seychelles'){echo "selected";}} ?>  value="Seychelles">Seychelles</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Sierra Leona'){echo "selected";}} ?>  value="Sierra Leona">Sierra Leona</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Singapur'){echo "selected";}} ?>  value="Singapur">Singapur</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Siria'){echo "selected";}} ?>  value="Siria">Siria</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Somalia'){echo "selected";}} ?>  value="Somalia">Somalia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Sri Lanka'){echo "selected";}} ?>  value="Sri Lanka">Sri Lanka</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='St Pierre y Miquelon'){echo "selected";}} ?>  value="St Pierre y Miquelon">St Pierre y Miquelon</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Suazilandia'){echo "selected";}} ?>  value="Suazilandia">Suazilandia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Sudán'){echo "selected";}} ?>  value="Sudán">Sudán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Suecia'){echo "selected";}} ?>  value="Suecia">Suecia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Suiza'){echo "selected";}} ?>  value="Suiza">Suiza</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Surinam'){echo "selected";}} ?>  value="Surinam">Surinam</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Tailandia'){echo "selected";}} ?>  value="Tailandia">Tailandia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Taiwán'){echo "selected";}} ?>  value="Taiwán">Taiwán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Tanzania'){echo "selected";}} ?>  value="Tanzania">Tanzania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Tayikistán'){echo "selected";}} ?>  value="Tayikistán">Tayikistán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Territorios franceses del Sur'){echo "selected";}} ?>  value="Territorios franceses del Sur">Territorios franceses del Sur</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Timor Oriental'){echo "selected";}} ?>  value="Timor Oriental">Timor Oriental</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Togo'){echo "selected";}} ?>  value="Togo">Togo</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Tonga'){echo "selected";}} ?>  value="Tonga">Tonga</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Trinidad y Tobago'){echo "selected";}} ?>  value="Trinidad y Tobago">Trinidad y Tobago</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Túnez'){echo "selected";}} ?>  value="Túnez">Túnez</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Turkmenistán'){echo "selected";}} ?>  value="Turkmenistán">Turkmenistán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Turquía'){echo "selected";}} ?>  value="Turquía">Turquía</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Tuvalu'){echo "selected";}} ?>  value="Tuvalu">Tuvalu</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Ucrania'){echo "selected";}} ?>  value="Ucrania">Ucrania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Uganda'){echo "selected";}} ?>  value="Uganda">Uganda</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Uruguay'){echo "selected";}} ?>  value="Uruguay">Uruguay</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Uzbekistán'){echo "selected";}} ?>  value="Uzbekistán">Uzbekistán</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Vanuatu'){echo "selected";}} ?>  value="Vanuatu">Vanuatu</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Venezuela'){echo "selected";}} ?>  value="Venezuela">Venezuela</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Vietnam'){echo "selected";}} ?>  value="Vietnam">Vietnam</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Yemen'){echo "selected";}} ?>  value="Yemen">Yemen</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Yugoslavia'){echo "selected";}} ?>  value="Yugoslavia">Yugoslavia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Zambia'){echo "selected";}} ?>  value="Zambia">Zambia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Zimbabue'){echo "selected";}} ?>  value="Zimbabue">Zimbabue</option>
                      </select>


        
                  </div>
                </div>


                </div>
                <div class="row">


                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="genero"  />
                      <label for="genero">Genero</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <select id="generoInput" name="generoInput" hidden disabled >
                    <option value="">Selecciona un genero</option>
                    <option <?php if(isset($_GET['generoInput'])){if($_GET['generoInput']=='F'){echo "selected";}} ?> value="F">FEMENINO</option>
                    <option <?php if(isset($_GET['generoInput'])){if($_GET['generoInput']=='M'){echo "selected";}} ?> value="M">MASCULINO</option>
                   
                  </select>
                  </div>
                </div>

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="cumpleanos"  />
                      <label for="cumpleanos">Cumpleaños</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <select id="cumpleanosInput" name="cumpleanosInput" hidden disabled >
                      <option value="">Selecciona un mes</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='01'){echo "selected";}} ?> value="01">ENERO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='02'){echo "selected";}} ?> value="02">FEBRERO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='03'){echo "selected";}} ?> value="03">MARZO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='04'){echo "selected";}} ?> value="04">ABRIL</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='05'){echo "selected";}} ?> value="05">MAYO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='06'){echo "selected";}} ?> value="06">JUNIO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='07'){echo "selected";}} ?> value="07">JULIO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='08'){echo "selected";}} ?> value="08">AGOSTO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='09'){echo "selected";}} ?> value="09">SEPTIEMBRE</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='10'){echo "selected";}} ?> value="10">OCTUBRE</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='11'){echo "selected";}} ?> value="11">NOVIEMBRE</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='12'){echo "selected";}} ?> value="12">DICIEMBRE</option>
                  </select>
                   
                  </div>
                  <!-- <div class="input-field row">
                    <input name="cumpleanosInput" hidden disabled required value="<?php if(isset($_GET['cumpleanosInput'])){ echo $_GET['cumpleanosInput'];}?>" id="cumpleanosInput" type="date" class="validate">
                    <label for="cumpleanosInput">Cumpleaños</label>
                  </div> -->
                </div>

                
              </div>

              <div class="row">
                <button type="submit" hidden></button>
                 <p> 
                  <a href="javascript: void(0);" class="wav-es-effect waves-light btn-large ripple-effect " id="boton">Buscar</a>
                </p>
              </div>  
               
            </form>
          </div>

            <?php
            if (!empty($_GET)) {
              require_once('includes/busqueda-avanzada.php');
            }
             
              ?>
          </div>
          </div>
         </div>

        

        </main>
        <script type="text/javascript">

          window.addEventListener("load", function(){
             var check = document.getElementById('codigo').checked;
              if (document.getElementById('codigoInput').value!="") {
                document.getElementById('codigo').checked=true;
                document.getElementById('codigoInput').disabled=false;
                document.getElementById('codigoInput').hidden=false;
              }else if (check) {document.getElementById('codigoInput').disabled=false;
                          document.getElementById('codigoInput').hidden=false;
              }else if(!check){document.getElementById('codigoInput').disabled=true;
                               document.getElementById('codigoInput').hidden=true;
              }

              var check = document.getElementById('nombres').checked;
              if (document.getElementById('nombresInput').value!="") {
                document.getElementById('nombres').checked=true;
                document.getElementById('nombresInput').disabled=false;
                document.getElementById('nombresInput').hidden=false;
              }else if (check) {document.getElementById('nombresInput').disabled=false;
                          document.getElementById('nombresInput').hidden=false;
              }else if(!check){document.getElementById('nombresInput').disabled=true;
                               document.getElementById('nombresInput').hidden=true;
              }

              var check = document.getElementById('apellidos').checked;
              if (document.getElementById('apellidosInput').value!="") {
                document.getElementById('apellidos').checked=true;
                document.getElementById('apellidosInput').disabled=false;
                document.getElementById('apellidosInput').hidden=false;
              }else if (check) {document.getElementById('apellidosInput').disabled=false;
                          document.getElementById('apellidosInput').hidden=false;
              }else if(!check){document.getElementById('apellidosInput').disabled=true;
                               document.getElementById('apellidosInput').hidden=true;
              }

              var check = document.getElementById('clase').checked;
              if (document.getElementById('claseInput').value!="") {
                document.getElementById('clase').checked=true;
                document.getElementById('claseInput').disabled=false;
                document.getElementById('claseInput').hidden=false;
              }else if (check) {document.getElementById('claseInput').disabled=false;
                          document.getElementById('claseInput').hidden=false;
              }else if(!check){document.getElementById('claseInput').disabled=true;
                               document.getElementById('claseInput').hidden=true;
              }

              var check = document.getElementById('carrera').checked;
              if (document.getElementById('carreraInput').value!="") {
                document.getElementById('carrera').checked=true;
                document.getElementById('carreraInput').disabled=false;
                document.getElementById('carreraInput').hidden=false;
              }else if (check) {document.getElementById('carreraInput').disabled=false;
                          document.getElementById('carreraInput').hidden=false;
              }else if(!check){document.getElementById('carreraInput').disabled=true;
                               document.getElementById('carreraInput').hidden=true;
              }

              var check = document.getElementById('pais').checked;
              if (document.getElementById('paisInput').value!="") {
                document.getElementById('pais').checked=true;
                document.getElementById('paisInput').disabled=false;
                document.getElementById('paisInput').hidden=false;
              }else if (check) {document.getElementById('paisInput').disabled=false;
                          document.getElementById('paisInput').hidden=false;
              }else if(!check){document.getElementById('paisInput').disabled=true;
                               document.getElementById('paisInput').hidden=true;
              }

              var check = document.getElementById('genero').checked;
              if (document.getElementById('generoInput').value!="") {
                document.getElementById('genero').checked=true;
                document.getElementById('generoInput').disabled=false;
                document.getElementById('generoInput').hidden=false;
              }else if (check) {document.getElementById('generoInput').disabled=false;
                          document.getElementById('generoInput').hidden=false;
              }else if(!check){document.getElementById('generoInput').disabled=true;
                               document.getElementById('generoInput').hidden=true;
              }



              var check = document.getElementById('cumpleanos').checked;
              if (document.getElementById('cumpleanosInput').value!="") {
                document.getElementById('cumpleanos').checked=true;
                document.getElementById('cumpleanosInput').disabled=false;
                document.getElementById('cumpleanosInput').hidden=false;
              }else if (check) {document.getElementById('cumpleanosInput').disabled=false;
                          document.getElementById('cumpleanosInput').hidden=false;
              }else if(!check){document.getElementById('cumpleanosInput').disabled=true;
                               document.getElementById('cumpleanosInput').hidden=true;
              }
              
          });



          document.getElementById('codigo').addEventListener("click", function(){
             var check = document.getElementById('codigo').checked;
              if (check) {document.getElementById('codigoInput').disabled=false;
                          document.getElementById('codigoInput').hidden=false;
              }else if(!check){document.getElementById('codigoInput').disabled=true;
                               document.getElementById('codigoInput').hidden=true;
              }
              
          });

          document.getElementById('nombres').addEventListener("click", function(){
             var check = document.getElementById('nombres').checked;
              if (check) {document.getElementById('nombresInput').disabled=false;
                          document.getElementById('nombresInput').hidden=false;
              }else if(!check){document.getElementById('nombresInput').disabled=true;
                               document.getElementById('nombresInput').hidden=true;
              }
              
          });

          document.getElementById('apellidos').addEventListener("click", function(){
             var check = document.getElementById('apellidos').checked;
              if (check) {document.getElementById('apellidosInput').disabled=false;
                          document.getElementById('apellidosInput').hidden=false;
              }else if(!check){document.getElementById('apellidosInput').disabled=true;
                               document.getElementById('apellidosInput').hidden=true;
              }
              
          });

          document.getElementById('clase').addEventListener("click", function(){
             var check = document.getElementById('clase').checked;
              if (check) {document.getElementById('claseInput').disabled=false;
                          document.getElementById('claseInput').hidden=false;
              }else if(!check){document.getElementById('claseInput').disabled=true;
                               document.getElementById('claseInput').hidden=true;
              }
              
          });

          document.getElementById('carrera').addEventListener("click", function(){
             var check = document.getElementById('carrera').checked;
              if (check) {document.getElementById('carreraInput').disabled=false;
                          document.getElementById('carreraInput').hidden=false;
              }else if(!check){document.getElementById('carreraInput').disabled=true;
                               document.getElementById('carreraInput').hidden=true;
              }
              
          });

          document.getElementById('pais').addEventListener("click", function(){
             var check = document.getElementById('pais').checked;
              if (check) {document.getElementById('paisInput').disabled=false;
                          document.getElementById('paisInput').hidden=false;
              }else if(!check){document.getElementById('paisInput').disabled=true;
                               document.getElementById('paisInput').hidden=true;
              }
              
          });

          document.getElementById('genero').addEventListener("click", function(){
             var check = document.getElementById('genero').checked;
              if (check) {document.getElementById('generoInput').disabled=false;
                          document.getElementById('generoInput').hidden=false;
              }else if(!check){document.getElementById('generoInput').disabled=true;
                               document.getElementById('generoInput').hidden=true;
              }
              
          });


          document.getElementById('cumpleanos').addEventListener("click", function(){
             var check = document.getElementById('cumpleanos').checked;
              if (check) {document.getElementById('cumpleanosInput').disabled=false;
                          document.getElementById('cumpleanosInput').hidden=false;
              }else if(!check){document.getElementById('cumpleanosInput').disabled=true;
                               document.getElementById('cumpleanosInput').hidden=true;
              }
              
          });


          document.getElementById('boton').addEventListener('click', function(){
            console.log(document.getElementById('codigo').checked +' - '+document.getElementById('nombres').checked +' - '+document.getElementById('apellidos').checked +' - '+document.getElementById('clase').checked +' - '+document.getElementById('carrera').checked +' - '+document.getElementById('pais').checked +' - '+document.getElementById('genero').checked +' - '+document.getElementById('cumpleanos').checked);


              if (document.getElementById('codigo').checked==true || document.getElementById('nombres').checked==true || document.getElementById('apellidos').checked==true || document.getElementById('clase').checked==true || document.getElementById('carrera').checked==true || document.getElementById('pais').checked==true || document.getElementById('genero').checked==true ||  document.getElementById('cumpleanos').checked==true ){
                // document.getElementById('cdr').submit();
                $('#cdr').find('[type="submit"]').trigger('click');
              }else{
                document.getElementById('error').innerHTML="<h6 id='error'>Selecciona el dato que desees y completa los datos necesarios.</h6>"
              }

          });


        </script>

          <?php require_once('includes/footer.php'); ?>
    </body>
<?php 
  }
}
 ?>
</html>




<!-- 

`ID`, `codigo`, `nombres`, `apellidos`, `nacionalidad`, `genero`, `programa`  `orientacion`  `dia_graduacion`, `mes_graduacion`, `estatus`, `lugar_pasantia`, `exp_pasantia`, `area_investigacion`, `asesor_tesis`, `url_pasantia`, `titulo`, `pa`, `fecha_nacimiento`, `financiado_por`, `direccion`, `email`, `telefono`, `movil`, -->