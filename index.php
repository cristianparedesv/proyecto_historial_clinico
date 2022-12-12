<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Historia Clínica</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<!-- Estilos CSS -->
	<style>
	</style>
</head>
<body>
	<nav style="text-align: center; padding: 20px;">
		<a href="diagnosticos.php" target="_blank">Ir a Diagnósticos</a>
		<a href="registro_diario.php">Ir a Registro Diario</a>
		<button id="z-button" type="button" onclick="changeZoom()">🔎︎+</button>
	</nav>
	<div class="con-a4" id="dvContents">
		<div class="con-principal">
			<div class="con-header">
				<img class="es-logos" src="logo_unap.png" alt="Logo Unap">
				<div class="con-titulos">
					<h2>UNIVERSIDAD NACIONAL DEL ALTIPLANO PUNO</h2>
					<h2>OFICINA BIENESTAR UNIVERSITARIO</h2>
					<h2>SERVICIO MEDICO PRIMARIO</h2>
				</div>
				<img class="es-logos" src="logo_hospital.jpg" alt="Logo Hospital Universitario">
			</div>
			<form id="form-registro" action="insertar.php" method="POST">
				<h2 id="con-titulo-form">HISTORIA CLÍNICA DE ATENCIÓN INTEGRAL DEL ESTUDIANTE</h2>
				<!-- con-1 -->
				<div class="con-1 es-boxes">
					<div class="con-escuela-profesional" style="width: 55%;">
						<label for="eProfesional">Escuela<br>Profesional:</label>
						<select name="eProfesional" id="eProfesional" style="text-align: initial;">
							<option selected disabled hidden></option>
							<option value="1">EP Administración</option>
							<option value="2">EP Antropología</option>
							<option value="3">EP Arquitectura y Urbanismo</option>
							<option value="4">EP Arte</option>
							<option value="5">EP Ciencias Biológicas</option>
							<option value="6">EP Ciencias Contables</option>
							<option value="7">EP Ciencias de la Comunicación Social</option>
							<option value="8">EP Derecho</option>
							<option value="9">EP Enfermería</option>
							<option value="10">EP Educación Física</option>
							<option value="11">EP Físico - Matemática</option>
							<option value="12">EP Ing Agronómica</option>
							<option value="13">EP Ingenieria de Minas</option>
							<option value="14">EP Ingeniería Agroindustrial</option>
							<option value="15">EP Ingeniería Agrícola</option>
							<option value="16">EP Ingeniería Civil</option>
							<option value="17">EP Ingeniería de Sistemas</option>
							<option value="18">EP Ingeniería Económica</option>
							<option value="19">EP Ingeniería Electrónica</option>
							<option value="20">EP Ingeniería Estadística e Informática</option>
							<option value="21">EP Ingeniería Geológica</option>
							<option value="22">EP Ingeniería Mecánica Eléctrica</option>
							<option value="23">EP Ingeniería Metalúrgica</option>
							<option value="24">EP Ingeniería Química</option>
							<option value="25">EP Ingeniería Topográfica y Agrimensura</option>
							<option value="26">EP Educación Inicial</option>
							<option value="27">EP Medicina Humana</option>
							<option value="28">EP Medicina Veterinaria y Zootecnia</option>
							<option value="29">EP Nutrición Humana</option>
							<option value="30">EP Odontología</option>
							<option value="31">EP Educación Primaria</option>
							<option value="32">EP Educación Secundaria</option>
							<option value="33">EP Sociología</option>
							<option value="34">EP Trabajo Social</option>
							<option value="35">EP Turismo</option>
						</select>
					</div>

					<div class="con-dni" style="width: 25%;">
						<label for="dni">DNI:</label>
						<input type="text" name="dni" id="dni">
					</div>
					<div class="con-nro-hc" style="width: 20%;">
						<label for="nroHC">N°<br>HC:</label>
						<input type="number" name="nroHC" id="nroHC">
					</div>
				</div>


				<!-- con-2 -->
				<h2 id="con-titulo-datos-generales">DATOS GENERALES</h2>
				<div class="con-2 es-boxes">
					<div class="fila-1">
						<div class="con-apellidos-nombres" style="width: 70%;">
							<label for="apellidosNombres">Apellidos&nbspy<br>Nombres:</label>
							<input type="text" name="apellidosNombres" id="apellidosNombres">
						</div>
						<div class="con-edad" style="width: 15%;">
							<label for="edad">Edad:</label>
							<input type="number" name="edad" id="edad">
						</div>
						<div class="con-sexo" style="width: 15%;">
							<label for="sexo">Sexo:</label>
							<select name="sexo" id="sexo">
								<option selected disabled hidden></option>
								<option value="M">M</option>
								<option value="F">F</option>
							</select>
						</div>		

					</div>

					<div class="fila-2">
						<div class="con-domicilio" style="width: 60%;">
							<label for="domicilio">Domicilio:</label>
							<input type="text" name="domicilio" id="domicilio">
						</div>
						<div class="con-procedencia" style="width: 40%;">
							<label for="procedencia">Procedencia:</label>
							<input type="text" name="procedencia" id="procedencia">
						</div>

					</div>
					<div class="fila-3">
						<div class="con-lugar-nacimiento" style="width: 60%;">
							<label for="lugarNacimiento">Lugar&nbspde&nbspNacimiento:</label>
							<input type="text" name="lugarNacimiento" id="lugarNacimiento">
						</div>
						<div class="con-telefono" style="width: 40%;">
							<label for="telefono">Teléfono:</label>
							<input type="text" name="telefono" id="telefono">
						</div>					
					</div>

					<div class="fila-4">
						<div class="con-telefono-familiar" style="width: 60%;">
							<label for="telefonoFamiliar">Télefono&nbspde&nbspFamiliar:</label>
							<input type="text" name="telefonoFamiliar" id="telefonoFamiliar">
						</div>
						<div class="con-religion" style="width: 40%;">
							<label for="religion">Religión:</label>
							<input type="text" name="religion" id="religion">
						</div>					
					</div>
				</div>

				<!-- con-3 -->
				<div class="con-3 es-boxes">
					<div class="columna-1" style="width: 50%;">
						<span style="border: 1px solid black;">Alergia&nbspa&nbspMedicamentos:</span>				
						<div class="radios-alergia-medicamentos" style="column-gap: 10px;">
							<input type="radio" id="am-radio1" name="alergiaMedicamentos" value="Si" onclick="habilitarDesInput()">
							<label for="am-radio1">Si</label>

							<input type="radio" id="am-radio2" name="alergiaMedicamentos" value="No" onclick="habilitarDesInput()">
							<label for="am-radio2">No</label>

							<input type="radio" id="am-radio3" name="alergiaMedicamentos" value="No se" onclick="habilitarDesInput()">
							<label for="am-radio3">No&nbspse</label>
						</div>
					</div>

					<div class="columna-2" style="width: 50%; border: 1px solid black;" >
						<label for="especifiqueAM" style="border-right: 1px solid black;">Especifíque:</label>
						<input type="text" name="especifiqueAM" id="especifiqueAM" placeholder="&#128711" disabled>
					</div>
				</div>

				<!-- con-4 -->
				<h2 id="con-titulo-antecedentes-personales">ANTECEDENTES PERSONALES</h2>
				<div class="con-4 es-boxes">
					<div class="con-antecedentes-fila-1">
						<!-- Crear un template, componente, clase -->
						<div class="cajas-estilos" style="width: 14.28%;">
							<span>HÁBITOS&nbspNOCIVOS<br>¿FUMA?</span>
							<div class="radios-estilos">
								<input type="radio" id="hnFuma-radio1" name="hnFuma" value="Si">
								<label for="hnFuma-radio1">Si</label>

								<input type="radio" id="hnFuma-radio2" name="hnFuma" value="A veces">
								<label for="hnFuma-radio2">A&nbspveces</label>

								<input type="radio" id="hnFuma-radio3" name="hnFuma" value="No">
								<label for="hnFuma-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 14.28%;">
							<span>HÁBITOS&nbspNOCIVOS<br>¿TOMA&nbspLICOR?</span>
							<div class="radios-estilos">
								<input type="radio" id="hnLicor-radio1" name="hnLicor" value="Si">
								<label for="hnLicor-radio1">Si</label>

								<input type="radio" id="hnLicor-radio2" name="hnLicor" value="A veces">
								<label for="hnLicor-radio2">A&nbspveces</label>

								<input type="radio" id="hnLicor-radio3" name="hnLicor" value="No">
								<label for="hnLicor-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 14.28%;">
							<span>TRANSFUSIONES<br>SANGUÍNEAS</span>
							<div class="radios-estilos">
								<input type="radio" id="ts-radio1" name="transfusionesSa" value="Si">
								<label for="ts-radio1">Si</label>

								<input type="radio" id="ts-radio2" name="transfusionesSa" value="No se">
								<label for="ts-radio2">No&nbspse</label>

								<input type="radio" id="ts-radio3" name="transfusionesSa" value="No">
								<label for="ts-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 14.28%;">
							<span>ENFERMEDADES<br>INFECTO&nbspCONTAGIOSAS</span>
							<div class="radios-estilos">
								<input type="radio" id="enfContagiosas-radio1" name="enfContagiosas" value="Si">
								<label for="enfContagiosas-radio1">Si</label>

								<input type="radio" id="enfContagiosas-radio2" name="enfContagiosas" value="No se">
								<label for="enfContagiosas-radio2">No&nbspse</label>

								<input type="radio" id="enfContagiosas-radio3" name="enfContagiosas" value="No">
								<label for="enfContagiosas-radio3">No</label>
										
							</div>
						</div>


						<div class="cajas-estilos" style="width: 14.28%;">
							<span>VACUNAS<br>COMPLETAS</span>
							<div class="radios-estilos">
								<input type="radio" id="vacunasCom-radio1" name="vacunasCom" value="Si">
								<label for="vacunasCom-radio1">Si</label>

								<input type="radio" id="vacunasCom-radio2" name="vacunasCom" value="No se">
								<label for="vacunasCom-radio2">No&nbspse</label>

								<input type="radio" id="vacunasCom-radio3" name="vacunasCom" value="No">
								<label for="vacunasCom-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 14.28%;">
							<span>ENFERMEDADES<br>CRÓNICAS</span>
							<div class="radios-estilos">
								<input type="radio" id="enfCronicas-radio1" name="enfCronicas" value="Si">
								<label for="enfCronicas-radio1">Si</label>

								<input type="radio" id="enfCronicas-radio2" name="enfCronicas" value="No se">
								<label for="enfCronicas-radio2">No&nbspse</label>

								<input type="radio" id="enfCronicas-radio3" name="enfCronicas" value="No">
								<label for="enfCronicas-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 14.28%;">
							<span>DISCAPACIDAD</span>
							<div class="radios-estilos">
								<input type="radio" id="discapacidad-radio1" name="discapacidad" value="Si">
								<label for="discapacidad-radio1">Si</label>

								<input type="radio" id="discapacidad-radio2" name="discapacidad" value="No se">
								<label for="discapacidad-radio2">No&nbspse</label>

								<input type="radio" id="discapacidad-radio3" name="discapacidad" value="No">
								<label for="discapacidad-radio3">No</label>
										
							</div>
						</div>

					</div>

					<!-- Fila2 -->

					<div class="con-antecedentes-fila-1">
						<!-- Crear un template, componente, clase -->
						<div class="cajas-estilos" style="width: 14.28%;">
							<span>ACCIDENTES</span>
							<div class="radios-estilos">
								<input type="radio" id="accidentes-radio1" name="accidentes" value="Si">
								<label for="accidentes-radio1">Si</label>

								<input type="radio" id="accidentes-radio2" name="accidentes" value="No se">
								<label for="accidentes-radio2">No&nbspse</label>

								<input type="radio" id="accidentes-radio3" name="accidentes" value="No">
								<label for="accidentes-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 14.28%;">
							<span>INTOXICACIONES</span>
							<div class="radios-estilos">
								<input type="radio" id="intoxicaciones-radio1" name="intoxicaciones" value="Si">
								<label for="intoxicaciones-radio1">Si</label>

								<input type="radio" id="intoxicaciones-radio2" name="intoxicaciones" value="No se">
								<label for="intoxicaciones-radio2">No&nbspse</label>

								<input type="radio" id="intoxicaciones-radio3" name="intoxicaciones" value="No">
								<label for="intoxicaciones-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 14.28%;">
							<span>CIRUGÍA<br>HOSPITALIZACIÓN</span>
							<div class="radios-estilos">
								<input type="radio" id="cirugiaHosp-radio1" name="cirugiaHosp" value="Si">
								<label for="cirugiaHosp-radio1">Si</label>

								<input type="radio" id="cirugiaHosp-radio2" name="cirugiaHosp" value="No se">
								<label for="cirugiaHosp-radio2">No&nbspse</label>

								<input type="radio" id="cirugiaHosp-radio3" name="cirugiaHosp" value="No">
								<label for="cirugiaHosp-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 14.28%;">
							<span>USO&nbspDE<br>MEDICAMENTOS</span>
							<div class="radios-estilos">
								<input type="radio" id="usoMedicamentos-radio1" name="usoMedicamentos" value="Si">
								<label for="usoMedicamentos-radio1">Si</label>

								<input type="radio" id="usoMedicamentos-radio2" name="usoMedicamentos" value="No se">
								<label for="usoMedicamentos-radio2">No&nbspse</label>

								<input type="radio" id="usoMedicamentos-radio3" name="usoMedicamentos" value="No">
								<label for="usoMedicamentos-radio3">No</label>
										
							</div>
						</div>


						<div class="cajas-estilos" style="width: 14.28%;">
							<span>PROBLEMAS<br>PSICOLÓGICOS</span>
							<div class="radios-estilos">
								<input type="radio" id="proPsicologicos-radio1" name="proPsicologicos" value="Si">
								<label for="proPsicologicos-radio1">Si</label>

								<input type="radio" id="proPsicologicos-radio2" name="proPsicologicos" value="No se">
								<label for="proPsicologicos-radio2">No&nbspse</label>

								<input type="radio" id="proPsicologicos-radio3" name="proPsicologicos" value="No">
								<label for="proPsicologicos-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 28.56%;">
							<label for="algunEstadoPer" style="font-size: 8.8px; display: block; margin-bottom: 3.5px; text-align: justify;">
								¿USTED PADECE DE ALGUNA ENFERMEDAD, ESTADO O PROBLEMA QUE NO FIGURA AQUÍ, Y QUE DEBERÍAMOS CONOCER?
							</label>
							<input type="text" id="algunEstadoPer" name="algunEstadoPer" style="width: 100%; border: none; border-bottom: 1px solid black;">
						</div>

					</div>

				</div>


				<!-- con-5 -->
				<h2 id="con-titulo-antecedentes-familiares">ANTECEDENTES FAMILIARES</h2>
				<div class="con-5 es-boxes">
					<div class="con-antecedentes-fila-1">
						<!-- Crear un template, componente, clase -->
						<div class="cajas-estilos" style="width: 16.67%;">
							<span>DIABETES</span>
							<div class="radios-estilos">
								<input type="radio" id="diabetes-radio1" name="diabetes" value="Si">
								<label for="diabetes-radio1">Si</label>

								<input type="radio" id="diabetes-radio2" name="diabetes" value="No se">
								<label for="diabetes-radio2">No&nbspse</label>

								<input type="radio" id="diabetes-radio3" name="diabetes" value="No">
								<label for="diabetes-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 16.67%;">
							<span>OBESIDAD</span>
							<div class="radios-estilos">
								<input type="radio" id="obesidad-radio1" name="obesidad" value="Si">
								<label for="obesidad-radio1">Si</label>

								<input type="radio" id="obesidad-radio2" name="obesidad" value="No se">
								<label for="obesidad-radio2">No&nbspse</label>

								<input type="radio" id="obesidad-radio3" name="obesidad" value="No">
								<label for="obesidad-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 16.67%;">
							<span>CARDIOVASCULAR</span>
							<div class="radios-estilos">
								<input type="radio" id="cardiovascular-radio1" name="cardiovascular" value="Si">
								<label for="cardiovascular-radio1">Si</label>

								<input type="radio" id="cardiovascular-radio2" name="cardiovascular" value="No se">
								<label for="cardiovascular-radio2">No&nbspse</label>

								<input type="radio" id="cardiovascular-radio3" name="cardiovascular" value="No">
								<label for="cardiovascular-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 16.67%;">
							<span>ALERGIA</span>
							<div class="radios-estilos">
								<input type="radio" id="alergia-radio1" name="alergia" value="Si">
								<label for="alergia-radio1">Si</label>

								<input type="radio" id="alergia-radio2" name="alergia" value="No se">
								<label for="alergia-radio2">No&nbspse</label>

								<input type="radio" id="alergia-radio3" name="alergia" value="No">
								<label for="alergia-radio3">No</label>
										
							</div>
						</div>


						<div class="cajas-estilos" style="width: 16.67%;">
							<span>INFECCIONES</span>
							<div class="radios-estilos">
								<input type="radio" id="infecciones-radio1" name="infecciones" value="Si">
								<label for="infecciones-radio1">Si</label>

								<input type="radio" id="infecciones-radio2" name="infecciones" value="No se">
								<label for="infecciones-radio2">No&nbspse</label>

								<input type="radio" id="infecciones-radio3" name="infecciones" value="No">
								<label for="infecciones-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 16.67%;">
							<span>CÁNCER</span>
							<div class="radios-estilos">
								<input type="radio" id="cancer-radio1" name="cancer" value="Si">
								<label for="cancer-radio1">Si</label>

								<input type="radio" id="cancer-radio2" name="cancer" value="No se">
								<label for="cancer-radio2">No&nbspse</label>

								<input type="radio" id="cancer-radio3" name="cancer" value="No">
								<label for="cancer-radio3">No</label>
										
							</div>
						</div>

					</div>

					<!-- Fila2, fila 1 se aplica a fila 2, se copia los estilos -->

					<div class="con-antecedentes-fila-1">
						<!-- Crear un template, componente, clase -->
						<div class="cajas-estilos" style="width: 16.67%;">
							<span>PROBLEMAS&nbspPSICOLÓGICOS</span>
							<div class="radios-estilos">
								<input type="radio" id="proPsicologicosFa-radio1" name="proPsicologicosFa" value="Si">
								<label for="proPsicologicosFa-radio1">Si</label>

								<input type="radio" id="proPsicologicosFa-radio2" name="proPsicologicosFa" value="No se">
								<label for="proPsicologicosFa-radio2">No&nbspse</label>

								<input type="radio" id="proPsicologicosFa-radio3" name="proPsicologicosFa" value="No">
								<label for="proPsicologicosFa-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 16.67%;">
							<span>ALCOHOL,&nbspDROGAS&nbspY&nbspOTROS</span>
							<div class="radios-estilos">
								<input type="radio" id="alcoholDrogas-radio1" name="alcoholDrogas" value="Si">
								<label for="alcoholDrogas-radio1">Si</label>

								<input type="radio" id="alcoholDrogas-radio2" name="alcoholDrogas" value="No se">
								<label for="alcoholDrogas-radio2">No&nbspse</label>

								<input type="radio" id="alcoholDrogas-radio3" name="alcoholDrogas" value="No">
								<label for="alcoholDrogas-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 16.67%;">
							<span>VIOLENCIA&nbspINTRAFAMILIAR</span>
							<div class="radios-estilos">
								<input type="radio" id="violenciaIntrafamiliar-radio1" name="violenciaIntrafamiliar" value="Si">
								<label for="violenciaIntrafamiliar-radio1">Si</label>

								<input type="radio" id="violenciaIntrafamiliar-radio2" name="violenciaIntrafamiliar" value="No se">
								<label for="violenciaIntrafamiliar-radio2">No&nbspse</label>

								<input type="radio" id="violenciaIntrafamiliar-radio3" name="violenciaIntrafamiliar" value="No">
								<label for="violenciaIntrafamiliar-radio3">No</label>
										
							</div>
						</div>

						<div class="cajas-estilos" style="width: 50.01%;">
							<label for="algunEstadoFam" style="font-size: 8.8px; display: block; margin-bottom: 3.5px; text-align: justify;">
								¿ALGUNO DE SUS FAMILIARES, PADECE DE ALGUNA ENFERMEDAD, ESTADO O PROBLEMA QUE NO FIGURA AUÍ, Y QUE DEBERÍAMOS CONOCER?
							</label>
							<input type="text" id="algunEstadoFam" name="algunEstadoFam" style="width: 100%; border: none; border-bottom: 1px solid black;">
						</div>


					</div>

				</div>

				<div class="con-declaracion">
					<h2 style="margin-bottom: 12px;">DECLARACIÓN</h2>
					<p class="declaracion-estilos">Declaro bajo juramento que la información que proporciono es verdadera</p>
					<input type="text" id="firma" name="firma" style=" display: block; margin: 40px auto 2px auto; border: none; border-bottom: 2px dashed black; text-align: center;">
					<label for="firma" class="declaracion-estilos">Firma</label>
					<p class="declaracion-estilos">Esta información es confidencial</p>
				</div>
			</form>
		</div>
	</div>
	<div class="con-botones" style="display: flex; margin: 25px 0 25px 0; justify-content: center; column-gap: 20px;">
		<input type="submit" value="Registrar" form="form-registro">
		<button id="btnPrint" type="button">Imprimir</button>
	</div>

	<script>
	    function habilitarDesInput() {
	        const amSi = document.getElementById("am-radio1");
	        const amInput = document.getElementById("especifiqueAM");

	        if (amSi.checked) {
	        	amInput.style.pointerEvents = "auto";
	        	amInput.disabled = false;
	        	amInput.placeholder = "";
	        }
	        else {
	        	amInput.style.pointerEvents = "none";
	        	amInput.placeholder = "🛇";
	        	amInput.disabled = true;
	        }

	        /*amInput.style.pointerEvents = amSi.checked ? "auto" : "none";*/
	        /*amInput.disabled = amSi.checked ? false : true;*/
	    }
	</script>
	<script>
		let z = false;
		const z_button_ = document.getElementById("z-button");
		function changeZoom() {
			if (z == false) {
				document.body.style.zoom = "130%";
				z_button_.textContent = "🔎︎-";
				z = true;
			}
			else if (z) {		
				document.body.style.zoom = "100%";
				z_button_.textContent = "🔎︎+";
				z = false;
			}
		}
	</script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $("#btnPrint").click(function () {
        var contents = $("#dvContents").html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({ "position": "absolute", "top": "-1000000px" });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html><head><title>DIV Contents</title>');
        frameDoc.document.write('</head><body>');
        //Append the external CSS file.
        frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" />');
        //Append the DIV contents.
        frameDoc.document.write(contents);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });
});
</script>

</body>
</html>