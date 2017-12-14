<?php

	require_once('session.php');

	if (!empty($_POST)) {
		require_once('conexion.php');
		print_r($_POST);
<<<<<<< HEAD
		// $datos= Array ( 'nombres' => SINDY PAOLY 'apellidos' => PALMA BARRIENTOS 'genero' => FEMENINO 'nacionalidad' => HONDURAS 'direccion' => Col. Alameda, casa 242, calle Juan Manuel Gálvez, Tegucigalpa, Honduras. 'email' => sindy_paoly@hotmail.com 'telefono' => 22310578 'movil' => 98839638 'codigo' => 9078 'clase' => 2009 'programa' => INGENIERO EN ADMINISTRACION DE AGRONEGOCIOS 'orientacion' => ADMINISTRACION DE AGRONEGOCIOS 'diaGraduacion' => 5 'nombre' => 12 'estatus' => G2 'lugarPasantia' => Departamento de Economía y Estadística Aplicada,Universidad de Clemson, Carolina del Sur, Estados Unidos. 'exp_pasantia' => Experiencia en el área de investigación sobre seguros agrícolas, grado de inflación escolar y herramientas de investigación.Conocimientos adquiridos en economía agrícola y administración de fincas. Uso de programas estadísticos para análisis y manejo de datos. Elaboración y análisis de presupuestos en Laboratorios de Suelos. 'titulo_tesis' => Implementación de un Plan de Monitoreo y Evaluación para Proyectos de Desarrollo Rural: El Caso de un Proyecto de Talabartería en Honduras. 'asesor_tesis' => Dr. Fredi Arias 'url_tesis' => https://bdigital.zamorano.edu/handle/11036/201 'area_interes' => 23 'financiado_por' => Secretaria de Agricultura y Ganadería de Honduras (SAG), Food for Progress USDA, Zamorano y Fondos Propios. 'pa' => 23 'fechaNacimiento' => 1992-01-11 'buscador' => );

=======
>>>>>>> 4cccc0629e6aa0e2d49a718677de43afbb466b50
		// if (filter_var($datos), FILTER_VALIDATE_INT) {
		// 	# code...
		// }
		// if (filter_var($datos, FILTER_VALIDATE_EMAIL)) {
		// 	# code...
		// }
		// if (filter_var($datos, FILTER_VALIDATE_URL)) {
		// 	# code...
		// }
		$programa='';
		$orientacion='';
		switch ($_POST['programaAcademico']) {
		    case '0077':
		        $programa='0077';
		        break;
		    case '0707':
		        $programa='0707';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '0007':
		        $programa='0007';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '0777':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '07771':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '07772':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '07773':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '07774':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '077741':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		}

		if ($_POST['genero']=='FEMENINO') {
			$_POST['genero']='F';
		}elseif ($_POST['genero']=='MASCULINO') {
			$_POST['genero']='M';
		}
		print_r($programa.' - '.$orientacion);

		 // <option value="0077">AGRONOMO</option>
   //                  <option value="0707">AGRONOMO - PIA</option>
   //                  <option value="0007">AGRONOMO - PPIA</option>
   //                  <option value="0777">INGENIERO AGRONOMO</option>
   //                  <option value="07771">INGENIERIA AGRONOMICA</option>
   //                  <option value="07772">INGENIERO EN AGROINDUSTRIA ALIMENTARIA</option>
   //                  <option value="07773">INGENIERO EN ADMINISTRACION DE AGRONEGOCIOS</option>
   //                  <option value="07774">INGENIERO EN DESARROLLO SOCIOECONOMICO Y AMBIENTE</option>
   //                  <option value="077741">INGENIERO EN AMBIENTE Y DESARROLLO</option>



<<<<<<< HEAD
		$sql = "UPDATE `graduat3s` SET `ID` = '{$_POST['ID']}', `codigo` = '{$_POST['codigo']}', `nombres` = '{$_POST['nombres']}', `apellidos` = '{$_POST['apellidos']}', `nacionalidad` = '{$_POST['nacionalidad']}', `genero` = '{$_POST['genero']}', `programa` = '$programa', `orientacion` = '$orientacion', `dia_graduacion` = '{$_POST['diaGraduacion']}', `mes_graduacion` = '{$_POST['mesGraduacion']}', `estatus` = '{$_POST['estatus']}', `lugar_pasantia` = '{$_POST['lugarPasantia']}', `exp_pasantia` = '{$_POST['exp_pasantia']}', `area_interes` = '{$_POST['area_interes']}',, `nickname` = '{$_POST['nickname']}', `asesor_tesis` = '{$_POST['asesor_tesis']}', `url_tesis` = '{$_POST['url_tesis']}', `titulo_tesis` = '{$_POST['titulo_tesis']}, `fecha_nacimiento` = '{$_POST['fechaNacimiento']}', `financiado_por` = '{$_POST['financiado_por']}', `direccion` = '{$_POST['direccion']}', `email` = '{$_POST['email']}', `telefono` = '{$_POST['telefono']}', `movil` = '{$_POST['movil']}' WHERE `graduat3s`.`ID` = '{$_POST['ID']}'";

		if ($mysqli->query($sql) === TRUE) {
		    header("Location: /Github/Perfiles-Materialize-cris//index.php?busca=".$_POST['apellidos'], true);
=======
		$sql = "UPDATE `graduat3s` SET `ID` = '{$_POST['ID']}', `codigo` = '{$_POST['codigo']}', `nombres` = '{$_POST['nombres']}', `apellidos` = '{$_POST['apellidos']}', `nacionalidad` = '{$_POST['nacionalidad']}', `genero` = '{$_POST['genero']}', `programa` = '{$programa}', `orientacion` = '{$orientacion}', `dia_graduacion` = '{$_POST['diaGraduacion']}', `mes_graduacion` = '{$_POST['mesGraduacion']}', `estatus` = '{$_POST['estatus']}', `lugar_pasantia` = '{$_POST['lugarPasantia']}', `exp_pasantia` = '{$_POST['exp_pasantia']}', `area_investigacion` = '{$_POST['area_investigacion']}', `asesor_tesis` = '{$_POST['asesor_tesis']}', `url_tesis` = '{$_POST['url_tesis']}', `titulo_tesis` = '{$_POST['titulo_tesis']}', `fecha_nacimiento` = '{$_POST['fechaNacimiento']}', `financiado_por` = '{$_POST['financiado_por']}', `direccion` = '{$_POST['direccion']}', `email` = '{$_POST['email']}', `telefono` = '{$_POST['telefono']}', `movil` = '{$_POST['movil']}' WHERE `graduat3s`.`ID` = '{$_POST['ID']}'";

		if ($mysqli->query($sql) === TRUE) {
			header("Location: /Github/Perfiles-Materialize/index.php?busca=".$_POST['apellidos'], true);
>>>>>>> 4cccc0629e6aa0e2d49a718677de43afbb466b50
		} else {
		    echo "Error updating record: " . $mysqli->error;
		}

		$mysqli->close();
	}





 ?>
