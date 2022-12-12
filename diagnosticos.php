<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diagnósticos</title>
	<style>

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Arial;
		}

		:root {
			--set-border: 1px solid black;
			--checkedRadioColor: rgba(253, 255, 7, 0.4);
		}

		/* Diagnósticos */
		.d-con-a4 {
			width: 21cm;
			height: 29.7cm;
			margin: 0 auto;
			/*background-color: rgba(237, 230, 17, 0.01);*/
			/*border: 1px solid black;*/
			/*padding: 20px;PADDING DEFAULT, CAMBIA AL IMPRIMIR 4A*/
		}

		.d-con-principal {
			/*border: 1px solid black;*/
			width: 100%;
			height: 100%;
		}

		/* Estilos-d-con-n */
		.d-es-con-n {
			width: 100%;
			/*background-color: lightgreen;*/
			margin: 20px 0;
			border: var(--set-border);
			/*height: 100%;*/
		}

		.width-100 {width: 100%;}

		.d-es-titulos {
			font-size: 16px;
			font-weight: normal;
			text-align: center;
			border-top: var(--set-border);
			border-bottom: var(--set-border);
			/*
			border-top: var(--set-border);
			border-left: var(--set-border);
			border-right: var(--set-border);
			*/
		}

		.d-es-small-titulos {
			display: flex;
			justify-content: center;
			text-align: center;
			font-size: 11px;
			font-weight: bold;
			margin-bottom: 5px;
		}

		/* Enfermería */

		.d-enfermeria {padding: 5px;}

		div.d-enfermeria > div {margin: 15px 0;}

		.d-enfermeria-fila-1 {
			display: flex;
			border: var(--set-border);
		}

		.d-tem-triaje {
			width: 11.11%;
			/*border: var(--set-border);*/
			padding: 5px;
			margin: auto 0;
		}

		.d-tem-triaje input {
			width: 100%; 
			text-align: center;
			background-color: rgba(17, 56, 236, 0.04); 
			border: var(--set-border);
			height: 22px;
			border-radius: 2px;
		}

		/* estilos radios */

		.radios-estilos input[type="radio"] {display: none;}

		.radios-estilos label:hover {border: 2px solid blue;}

		.radios-estilos input[type="radio"]:checked+label {
			background-color: var(--checkedRadioColor);
			text-decoration: underline;
		}
		.radios-estilos label {
			display: inline-block;
			font-size: 13.5px;
			cursor: pointer;
			border: 1px solid black;
			border-radius: 2px;

			padding: 0 12px;
		}

		p.pseudoline {
			border-right: 1px solid black; 
			height: 105px;
		}

        table, th, td {
            border: var(--set-border);
            border-collapse: collapse;
        }

		.t-small-titulos {
			font-size: 11px;
			font-weight: bold;
			text-align: center;
		}

		.s-data {
			font-size: 11px;
		}

		td.s-data input {
			border: none;
			font-size: 11px;
		}

		.d-enfermeria-fila-2 {display: flex;}

		.prueba-obs > div {
			border-top: var(--set-border);
			border-right: var(--set-border);
			border-bottom: var(--set-border);
		}

		/* Medicina */

		.tem-box-medicina {
			width: 16.66%;
			border: var(--set-border);
			padding: 2.5px 0 5px 0
		}

		/* Odontología */



	</style>
</head>
<body>
	<div class="d-con-a4">
		<div class="d-con-principal">

			<!-- d-con-1 =========================================================================== -->
			<div class="d-con-1 d-es-con-n">
				<h2 class="d-es-titulos">ENFERMERÍA</h2>

				<div class="d-enfermeria width-100">
					<div class="d-enfermeria-fila-1 width-100">

						<div class="d-tem-triaje">
							<span class="d-es-small-titulos">ASPECTO<br>GENERAL</span>
							<div class="radios-estilos" style="display: flex; justify-content: center; column-gap: 10px;">
								<input type="radio" id="n_-radio1" name="aspectoGeneral" value="N">
								<label for="n_-radio1">N</label>

								<input type="radio" id="a_-radio2" name="aspectoGenera2" value="A">
								<label for="a_-radio2">A</label>
							</div>
						</div>
						<p class="pseudoline"></p>


						<div class="d-tem-triaje">
							<label class="d-es-small-titulos" for="peso">PESO (Kg)</label>
							<input type="number" step="0.1" id="peso" name="peso">
						</div>
						<p class="pseudoline"></p>


						<div class="d-tem-triaje">
							<label class="d-es-small-titulos" for="talla">TALLA (cm)</label>
							<input type="number" step="0.1" id="talla" name="talla">
						</div>
						<p class="pseudoline"></p>


						<div class="d-tem-triaje">
							<label class="d-es-small-titulos" for="imc">IMC</label>
							<input type="number" step="0.01" id="imc" name="imc">
						</div>
						<p class="pseudoline"></p>


						<div class="d-tem-triaje">
							<label class="d-es-small-titulos" for="presionArterial">PRESIÓN<br>ARTERIAL</label>
							<input type="number" step="0.01" id="presionArterial" name="presionArterial"><br>/
							<input type="number" step="0.01" id="presionArterial" name="presionArterial">
						</div>
						<p class="pseudoline"></p>


						<div class="d-tem-triaje">
							<label class="d-es-small-titulos" for="frecuenciaCardiaca">FRECUENCIA<br>CARDÍACA<br>(Lat/min)</label>
							<input type="number" id="frecuenciaCardiaca" name="frecuenciaCardiaca">
						</div>
						<p class="pseudoline"></p>


						<div class="d-tem-triaje">
							<label class="d-es-small-titulos" for="frecuenciaRespiratoria">FRECUENCIA<br>RESPIRATORIA<br>(Res/min)</label>
							<input type="number" id="frecuenciaRespiratoria" name="frecuenciaRespiratoria">
						</div>
						<p class="pseudoline"></p>


						<div class="d-tem-triaje">
							<label class="d-es-small-titulos" for="temperatura">TEMPERATURA<br>(°C)</label>
							<input type="number" id="temperatura" name="temperatura">
						</div>
						<p class="pseudoline"></p>


						<div class="d-tem-triaje">
							<label class="d-es-small-titulos" for="SO2">SO2 (%)</label>
							<input type="number" step="0.01" id="SO2" name="SO2">
						</div>

					</div>
					<div class="d-enfermeria-fila-2 width-100">
						<table style="width: 45%; text-align: center;">
							<tr>
								<td class="t-small-titulos" colspan="3">ESQUEMA DE VACUNACIÓN A LOS ESTUDIANTES</td>
							</tr>
							<tr>
								<td class="t-small-titulos">VACUNAS</td>
								<td class="t-small-titulos">DOSIS</td>
								<td class="t-small-titulos">FECHA</td>
							</tr>
							<tr>
								<td class="s-data">Antiamarílica</td>
								<td class="s-data">Única</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
							<tr>
								<td class="s-data" rowspan="3">HvB</td>
								<td class="s-data">HvB1</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
							<tr>
								<td class="s-data">HvB2</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
							<tr>
								<td class="s-data">HvB3</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
							<tr>
								<td class="s-data">Influenza</td>
								<td class="s-data">Única</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
							<tr>
								<td class="s-data" rowspan="3">DT</td>
								<td class="s-data">DT1</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
							<tr>
								<td class="s-data">DT2</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
							<tr>
								<td class="s-data">DT3</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
							<tr>
								<td class="s-data">SR</td>
								<td class="s-data">Única</td>
								<td class="s-data"><input type="date" name=""></td>
							</tr>
						</table>
						
						<div class="prueba-obs" style="width: 55%; position: relative;">
							<div class="width-100" style="position: absolute; top: 16%; display: flex;">
								<span class="t-small-titulos" style="width: 40%; border-right: var(--set-border);">PRUEBA RÁPIDA VIH</span>
								<label class="s-data" style="width: 20%; border-right: var(--set-border); text-align: center;">FECHA:</label>
								<input type="date" name="pruebaRapidaFechaVIH" id="pruebaRapidaFechaVIH" style="border: none; font-size: 11px; display: block; margin: 0 auto;">
							</div>
							<div class="width-100" style="padding: 5px; position: absolute; bottom: 0px;">
						
								<label for="observacionesEnfermeria" style="font-size: 11px;">OBSERVACIONES:</label>
								<textarea id="observacionesEnfermeria" name="observacione--set-bordersEnfermeria" style="width: 100%; background-color: rgba(17, 56, 236, 0.15); border: none; padding: 5px; resize: none; margin: 10px 0" onclick="textareaCursor(); /*this.onclick=null;*/"></textarea>

							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- d-con-2 =========================================================================== -->
			<div class="d-con-2 d-es-con-n">
				<h2 class="d-es-titulos">MEDICINA</h2>

				<div class="d-medicina width-100">

					<!-- fila-1 -->
					<div style="display: flex; padding: 20px 5px 0 5px">

						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">CABEZA</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_cabeza-radio-1" name="m_cabeza" value="N">
								<label for="m_cabeza-radio-1">N</label>

								<input type="radio" id="m_cabeza-radio-2" name="m_cabeza" value="A">
								<label for="m_cabeza-radio-2">A</label>
							</div>
						</div>

						
						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">CUELLO Y TIROIDES</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_cuello_tiroides-radio-1" name="m_cuello_tiroides" value="N">
								<label for="m_cuello_tiroides-radio-1">N</label>

								<input type="radio" id="m_cuello_tiroides-radio-2" name="m_cuello_tiroides" value="A">
								<label for="m_cuello_tiroides-radio-2">A</label>
							</div>
						</div>


						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">AGUDEZA VISUAL</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_agudeza_visual-radio-1" name="m_agudeza_visual" value="N">
								<label for="m_agudeza_visual-radio-1">N</label>

								<input type="radio" id="m_agudeza_visual-radio-2" name="m_agudeza_visual" value="A">
								<label for="m_agudeza_visual-radio-2">A</label>
							</div>
						</div>


						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">AGUDEZA AUDITIVA</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_agudeza_auditiva-radio-1" name="m_agudeza_auditiva" value="N">
								<label for="m_agudeza_auditiva-radio-1">N</label>

								<input type="radio" id="m_agudeza_auditiva-radio-2" name="m_agudeza_auditiva" value="A">
								<label for="m_agudeza_auditiva-radio-2">A</label>
							</div>
						</div>


						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">PIEL, FANERAS Y MUCOSAS</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_piel_mucosas-radio-1" name="m_piel_mucosas" value="N">
								<label for="m_piel_mucosas-radio-1">N</label>

								<input type="radio" id="m_piel_mucosas-radio-2" name="m_piel_mucosas" value="A">
								<label for="m_piel_mucosas-radio-2">A</label>
							</div>
						</div>


						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">CARDIO PULMONAR</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_cardio_pulmonar-radio-1" name="m_cardio_pulmonar" value="N">
								<label for="m_cardio_pulmonar-radio-1">N</label>

								<input type="radio" id="m_cardio_pulmonar-radio-2" name="m_cardio_pulmonar" value="A">
								<label for="m_cardio_pulmonar-radio-2">A</label>
							</div>
						</div>

					</div>

					<!-- fila-2 -->
					<div style="display: flex; padding: 0 5px 0 5px">
						
						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">TORAX Y MAMAS</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_torax_mamas-radio-1" name="m_torax_mamas" value="N">
								<label for="m_torax_mamas-radio-1">N</label>

								<input type="radio" id="m_torax_mamas-radio-2" name="m_torax_mamas" value="A">
								<label for="m_torax_mamas-radio-2">A</label>
							</div>
						</div>

						
						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">ABDOMEN</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_abdomen-radio-1" name="m_abdomen" value="N">
								<label for="m_abdomen-radio-1">N</label>

								<input type="radio" id="m_abdomen-radio-2" name="m_abdomen" value="A">
								<label for="m_abdomen-radio-2">A</label>
							</div>
						</div>


						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">COLUMNA</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_columna-radio-1" name="m_columna" value="N">
								<label for="m_columna-radio-1">N</label>

								<input type="radio" id="m_columna-radio-2" name="m_columna" value="A">
								<label for="m_columna-radio-2">A</label>
							</div>
						</div>


						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">GÉNITO - URINARIO</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_genito_urinario-radio-1" name="m_genito_urinario" value="N">
								<label for="m_genito_urinario-radio-1">N</label>

								<input type="radio" id="m_genito_urinario-radio-2" name="m_genito_urinario" value="A">
								<label for="m_genito_urinario-radio-2">A</label>
							</div>
						</div>


						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">EXTREMIDADES</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_extremidades-radio-1" name="m_extremidades" value="N">
								<label for="m_extremidades-radio-1">N</label>

								<input type="radio" id="m_extremidades-radio-2" name="m_extremidades" value="A">
								<label for="m_extremidades-radio-2">A</label>
							</div>
						</div>


						<div class="radios-estilos tem-box-medicina">
							<span class="d-es-small-titulos">NEUROLÓGICO</span>
							<div style="display: flex; justify-content: center; column-gap: 25px;">
								<input type="radio" id="m_neurologico-radio-1" name="m_neurologico" value="N">
								<label for="m_neurologico-radio-1">N</label>

								<input type="radio" id="m_neurologico-radio-2" name="m_neurologico" value="A">
								<label for="m_neurologico-radio-2">A</label>
							</div>
						</div>

					</div>

					<div class="width-100" style="padding: 5px;">
				
						<label for="observacionesEnfermeria" style="font-size: 11px;">OBSERVACIONES:</label>
						<textarea id="observacionesEnfermeria" name="observacione--set-bordersEnfermeria" style="width: 100%; background-color: rgba(17, 56, 236, 0.15); border: none; padding: 5px; resize: none; margin: 10px 0" onclick="textareaCursor(); /*this.onclick=null;*/"></textarea>

					</div>

				</div>
			</div>



			<!-- d-con-3 =========================================================================== -->
			<div class="d-con-3 d-es-con-n">
				<h2 class="d-es-titulos">ODONTOLOGÍA</h2>

				<div class="d-odontologia width-100">
					<table style="margin: 0 auto;">
						<tr class="di-tr">
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
						</tr>
						<tr class="di-tr">
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
							<td class="di-td">dd</td>
						</tr>
					</table>
				</div>
			</div>

			<!-- d-con-4 =========================================================================== -->
			<div class="d-con-4 d-es-con-n">
				<h2 class="d-es-titulos">LABORATORIO</h2>

				<div class="d-laboratorio">
					
				</div>
			</div>
		</div>
	</div>
	<script>
		/*document.body.style.zoom="130%"*/ 	
	</script>
	<script>
		function textareaCursor() {
			let textarea_ = document.getElementById('observacionesEnfermeria');
			let end = textarea_.value.length;

			textarea_.setSelectionRange(end, end);
			/*textarea_.focus();*/
		}
	</script>

</body>
</html>